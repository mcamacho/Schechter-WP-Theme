<?php
/**
 * Image_Text_Widget Class
 */
class Image_Text_Widget extends WP_Widget {
    /** constructor */
    function Image_Text_Widget() {
        parent::WP_Widget(false, $name = 'Image_Text_Widget');
    }

    function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$image = apply_filters( 'widget_image', $instance['image'], $instance );
		$text = apply_filters( 'widget_text', $instance['text'], $instance );
		$link = apply_filters( 'widget_link', $instance['link'], $instance );
		echo $before_widget;
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
			<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="" /></a>
			<div class="textwidget"><?php echo $text; ?></div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		if ( current_user_can('unfiltered_html') ):
			$instance['image'] =  $new_instance['image'];
			$instance['text'] =  $new_instance['text'];
			$instance['link'] =  $new_instance['link'];
		else:
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) );
		endif;	// wp_filter_post_kses() expects slashed
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'image' => '', 'text' => '', 'link' => '') );
		$title = strip_tags($instance['title']);
		$image = esc_textarea($instance['image']);
		$text = esc_textarea($instance['text']);
		$link = esc_textarea($instance['link']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		
		<input class="widefat" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="text" value="<?php echo $image; ?>" />
		
		<input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $link; ?>" /></p>

		<textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		
<?php
	}

}