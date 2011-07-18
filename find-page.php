<?php
/**
 * Template Name: Find a School Page Template
 * Description: Find a School Page Template
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
			<div id="search-map">
				
			</div><!-- #search-map -->
			
			<div id="search-options">
				<?php
				
				if ( isset($_GET['grade_id']) ) :
				
					global $wpdb;
					
					if ( ! empty($_GET['grade_id']) ) {
						$grade = $_GET['grade_id'];
						//search for school grades
						$the_query = $wpdb->get_results(
							"SELECT *
							FROM wp_dbt_schools
							WHERE lower_grade_level <= $grade
							AND upper_grade_level >= $grade");
					}
					
					elseif ( ! empty($_GET['zip_code']) ) {
						$zip = substr($_GET['zip_code'],0,1);
						//search for states relative to the first digit of the zip code
						$state_query = $wpdb->get_results(
							"SELECT stateID
							FROM wp_dbt_states
							WHERE zip1d = $zip");
						//construct the query based in the state_query
						$query_string = 'SELECT * FROM wp_dbt_schools WHERE ';
						$query_string = $query_string . 'state = 0';
						foreach( $state_query as $state_id ) :
							$query_string = $query_string . ' OR state = ' . $state_id->stateID;
						endforeach;
						//make the query
						$the_query = $wpdb->get_results($query_string);	
					}
					
					elseif ( ! empty($_GET['state_id']) ) {
						$state = $_GET['state_id'];
						//make the query
						$the_query = $wpdb->get_results(
								"SELECT *
								FROM wp_dbt_schools
								WHERE state = $state");	
					}
					
					foreach( $the_query as $post_results ) :
						echo '<a href="' . $post_results->url .'" alt="" target="_blank" >';
						echo $post_results->name . '</a><br />' ;
					endforeach;
					
					echo '<br /><a href="' . site_url() . '/find-a-school">New Search</a>';
					
				else :
				?>
				<form>
				
				<span>Select a State</span>
				<select id="state_id" name="state_id" >
					<option value="">Select</option>					
					<?php
					global $wpdb;
					$the_query = $wpdb->get_results("SELECT abbrev, stateID
									FROM wp_dbt_states");
					foreach( $the_query as $post_results ) :
					echo '<option value="' . $post_results->stateID . '" >';
					echo $post_results->abbrev . '</option>' ;
					endforeach;
					?>
				</select>
				
				<label for="zip_code">Enter Zip Code</label>
				<input name="zip_code" id="zip_code" type="text" />
				
				<span>Select a Grade Level</span>
				<select id="grade_id" name="grade_id" >
					<option value="">Select</option>					
					<?php
					global $wpdb;
					$the_query = $wpdb->get_results("SELECT *
									FROM wp_dbt_gradelevels");
					foreach( $the_query as $post_results ) :
					echo '<option value="' . $post_results->value. '" >';
					echo $post_results->label . '</option>' ;
					endforeach;
					?>
				</select>
				<input type="submit" value="submit" />
				</form>
				
				<?php endif; ?>
				
			</div><!-- #search-options -->	
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>