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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					$args = array(
					  'post_type' => 'attachment',
					  'numberposts' => -1,
					  'post_status' => null,
					  'post_mime_type' => 'image',
					  'orderby' => 'menu_order',
					  'order' => 'ASC',
					  );
					
					$attachments = get_posts($args);
					$carousel_images = false;
					if ($attachments) : 
						foreach ($attachments as $attachment) :
							//Loop through attachements (images)
							if($attachment->post_excerpt == 'Carousel') :
								echo '<li><img src="' . $attachment->guid . '" alt="" />';
								echo '<hgroup><h1>' . $attachment->post_title . '</h1>';
								echo '<h2>' . $attachment->post_content . '</h2></hgroup></li>';
								$carousel_images = true;
							endif;
							//End loop through attachements
						endforeach;
					endif ;
					if ( ! $attachments || ! $carousel_images ) :
						echo '<li><img src="' . get_stylesheet_directory_uri() . '/images/home-default.jpg" alt="" />';
						echo '<hgroup><h1>Schechter Network</h1>';
						echo '<h2>Welcome to a place</h2></hgroup></li>';
					endif ;
					endwhile; endif; ?>
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