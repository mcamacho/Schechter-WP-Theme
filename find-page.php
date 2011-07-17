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
				if (isset($_GET['grade_id'])) {
					$ttt = $_GET['grade_id'];
					echo $ttt; }
				?>
				<form>
				<label for="grade_level">Select a Grade Level</label>
				<input name="grade_level" id="grade_level" type="text" />
				<br />
				<select id="grade_id" name="grade_id" >
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
			</div><!-- #search-options -->	
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>