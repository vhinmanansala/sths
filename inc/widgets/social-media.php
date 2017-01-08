<?php

add_action( 'widgets_init', 'initSocialMediaWidget' );
 
function initSocialMediaWidget() {
    register_widget( 'SocialMediaWidget' );
}
 
class SocialMediaWidget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'SocialMediaWidget',
            'description' => 'Display social media pages.'
        );
 
        parent::__construct( 'SocialMediaWidget', 'Social Media Widget', $widget_details );
 
    }

    /*
	 * facebook
	 * twitter
	 *
    */
 
    public function form( $instance ) {
	    $title 		= '';
	    $facebook   = '';
	    $twitter    = '';
	    $pinterest  = '';
	    $googlePlus = '';
	    $linkedIn   = '';

	    if (!empty($instance['title'])) {
	    	$title = $instance['title'];
	    }

	    if (!empty($instance['facebook'])) {
	    	$facebook = $instance['facebook'];
	    }

	    if (!empty($instance['twitter'])) {
	    	$twitter = $instance['twitter'];
	    }

	    if (!empty($instance['pinterest'])) {
	    	$pinterest = $instance['pinterest'];
	    }

	    if (!empty($instance['googlePlus'])) {
	    	$googlePlus = $instance['googlePlus'];
	    }

	    if (!empty($instance['linkedIn'])) {
	    	$linkedIn = $instance['linkedIn'];
	    }

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('title') . "'>" . _e('Title') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('title') . "' name='" . $this->get_field_name('title') . "' type='text' value='" . esc_attr($title) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('facebook') . "'>" . _e('Facebook URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('facebook') . "' name='" . $this->get_field_name('facebook') . "' type='text' value='" . esc_attr($facebook) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('twitter') . "'>" . _e('Twitter URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('twitter') . "' name='" . $this->get_field_name('twitter') . "' type='text' value='" . esc_attr($twitter) . "'>";
	    echo "</p>";

	     echo "<p>";
	    	echo "<label for='" . $this->get_field_name('pinterest') . "'>" . _e('Pinterest URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('pinterest') . "' name='" . $this->get_field_name('pinterest') . "' type='text' value='" . esc_attr($pinterest) . "'>";
	    echo "</p>";

	     echo "<p>";
	    	echo "<label for='" . $this->get_field_name('googlePlus') . "'>" . _e('Google Plus URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('googlePlus') . "' name='" . $this->get_field_name('googlePlus') . "' type='text' value='" . esc_attr($googlePlus) . "'>";
	    echo "</p>";

	     echo "<p>";
	    	echo "<label for='" . $this->get_field_name('linkedIn') . "'>" . _e('LinkedIn URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('linkedIn') . "' name='" . $this->get_field_name('linkedIn') . "' type='text' value='" . esc_attr($linkedIn) . "'>";
	    echo "</p>";

	    echo $args['after_widget'];
	   
	}
 
    public function update( $new_instance, $old_instance ) {  
        return $new_instance;
    }
 
    public function widget( $args, $instance ) {
        extract($args);

        if (!empty($instance['title'])) {
        	echo "<h5>" . apply_filters('widget_title', $instance['title']) . "</h5>";
        }

        echo "<ul class='socialMedia clearfix'>";

        if (!empty($instance['facebook'])) {
        	printf('<li><a href="%s" class="facebookIcon">Facebook</a></li>', $instance['facebook']);
        }

        if (!empty($instance['twitter'])) {
        	printf('<li><a href="%s" class="twitterIcon">Twitter</a></li>', $instance['twitter']);
        }

        if (!empty($instance['pinterest'])) {
        	printf('<li><a href="%s" class="pinterestIcon">Pinterest</a></li>', $instance['pinterest']);
        }

        if (!empty($instance['googlePlus'])) {
        	printf('<li><a href="%s" class="googlePlusIcon">Google Plus</a></li>', $instance['googlePlus']);
        }

        if (!empty($instance['linkedIn'])) {
        	printf('<li><a href="%s" class="linkedInIcon">LinkedIn</a></li>', $instance['linkedIn']);
        }

        echo "</ul>";	
    }
}

?>