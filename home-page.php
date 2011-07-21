<?php
/**
 * Template Name: Home Page Template
 * Description: Home Page Template
 */

get_header(); ?>
	<div id="primary">
		<div id="home-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			<div id="rotate-carousel" class="slider-wrap"><ul class="slider slider-1">
				<?php
	
				// The Query
				$the_query = new WP_Query( array( 'post_status' => 'any', 'post_type' => 'attachment') );
				
				// The Loop
				$no_carousel_images = false;
				while ( $the_query->have_posts() ) : $the_query->the_post();
					if($post->post_excerpt == 'Carousel') :
						echo '<li><img src="' . $post->guid . '" alt="" />';
						echo '<hgroup><h1>' . $post->post_title . '</h1>';
						echo '<h2>' . $post->post_content . '</h2></hgroup></li>';
						$no_carousel_images = true;
					endif;
				endwhile;
				if ( ! $no_carousel_images || ! $the_query->have_posts()) :
					echo '<li><a href="">';
					echo  '<img src="' . get_stylesheet_directory_uri() . '/images/home-default.jpg" alt="" />';
					echo '</a></li>';
				endif;	
				// Reset Post Data
				wp_reset_postdata();
				
				?>
				
			</ul></div><!-- #rotate-carousel -->
		</div><!-- #home-nav -->
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.rotator.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/home-carousel.js"></script>
		<div id="content" role="main">

			<?php the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('home'); ?>

<?php get_footer(); ?>