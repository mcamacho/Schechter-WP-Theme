<?php

	require( dirname( __FILE__ ) . '/inc/widgets.php' );

	// Add menu for the footer.
	register_nav_menu( 'footer', __( 'Foot Menu', 'twentyeleven' ) );
	
	//Add a footer sidebar for the home template
	register_sidebar( array(
		'name' => __( 'Home Footer', 'twentyeleven' ),
		'id' => 'sidebar-home',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	// register FooWidget widget
	register_widget("Image_Text_Widget");
	
?>