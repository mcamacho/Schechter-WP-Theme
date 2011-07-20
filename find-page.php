<?php
/**
 * Template Name: Find a School Page Template
 * Description: Template and search script
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

				<?php
				//display the search results when variables on $_get url appears	
				if ( isset($_GET['state_id'])) :
				
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
					
					//schools list results layout
					foreach( $the_query as $post_results ) :
						//db queries for state abbrev and grade levels
						$state_name = $wpdb->get_var("SELECT abbrev FROM wp_dbt_states WHERE stateID = $post_results->state");
						$lower_level = $wpdb->get_var("SELECT label FROM wp_dbt_gradelevels WHERE value = $post_results->lower_grade_level");
						$upper_level = $wpdb->get_var("SELECT label FROM wp_dbt_gradelevels WHERE value = $post_results->upper_grade_level");
						
						$re_html = '<div id="school_item">';
						$re_html = $re_html . '<img src="' . $post_results->logo .'" title="' . $post_results->name . '" />';
						$re_html = $re_html . '<ul>';
						$re_html = $re_html . '<li><a href="' . $post_results->url .'" alt="" target="_blank" >' . $post_results->name . '</a></li>';
						$re_html = $re_html . '<li>' . $post_results->address . '</li>';
						$re_html = $re_html . '<li>' . $post_results->city . ', ' . $state_name . ' ' . $post_results->zip . '</li>';
						$re_html = $re_html . '<li>Grades: ' . $lower_level . '-' . $upper_level . '</li>';
						$re_html = $re_html . '<li>Tel: ' . $post_results->tel . '</li>';
						$re_html = $re_html . '<li>Fax: ' . $post_results->fax . '</li>';
						$re_html = $re_html . '<li>E-mail: <a href="mailto:' . $post_results->e_mail . '" title="mail" >' . $post_results->e_mail . '</a></li>';
						$re_html = $re_html . '</ul></div>';
						 
						echo $re_html ;
					endforeach;
					
					echo '<br /><a href="' . get_site_url() . '/?p=' . get_the_ID() . '" >New Search</a>';
					
				else :
				//display the search alternatives
				?>
				
				<div id="search-map">
					<span>Search in the map</span><br />
					<?php include('inc/usa.php') ?>
				</div><!-- #search-map -->
				
				<div id="search-options">
					
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
					</select><br />
					<span> or </span><br />
					
					<label for="zip_code">Enter Zip Code</label>
					<input name="zip_code" id="zip_code" type="text" /><br />
					<span> or </span><br />
					
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
					</select><br />
					
					<input type="submit" value="submit" />
					
					</form>
					
				</div><!-- #search-options -->
				
				<?php endif; ?>
			
			</div><!-- #content -->
			
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>