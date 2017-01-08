<?php

add_action( 'widgets_init', 'secondaryHeader' );
 
function secondaryHeader() {
    register_widget( 'SecondaryHeaderWidget' );
}
 
class SecondaryHeaderWidget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'SecondaryHeaderWidget',
            'description' => 'Display secondary header links.'
        );
 
        parent::__construct( 'SecondaryHeaderWidget', 'Secondary Header Widget', $widget_details );
 
    }

    /*
	 * facebook
	 * twitter
	 *
    */
 
    public function form( $instance ) {
	    $title 			 = '';
	    $contactNumber 	 = '';
	    $emailAddress	 = '';
	    $faqUrl 		 = '';
	    $studentLoginUrl = '';

	    if (!empty($instance['title'])) {
	    	$title = $instance['title'];
	    }

	    if (!empty($instance['liveChat'])) {
	    	$contactNumber = $instance['liveChat'];
	    }

	    if (!empty($instance['emailAddress'])) {
	    	$emailAddress = $instance['emailAddress'];
	    }

	    if (!empty($instance['faqUrl'])) {
	    	$faqUrl = $instance['faqUrl'];
	    }

	     if (!empty($instance['studentLoginUrl'])) {
	    	$studentLoginUrl = $instance['studentLoginUrl'];
	    }

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('title') . "'>" . _e('Title') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('title') . "' name='" . $this->get_field_name('title') . "' type='text' value='" . esc_attr($title) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('contactNumber') . "'>" . _e('Contact Number') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('contactNumber') . "' name='" . $this->get_field_name('contactNumber') . "' type='text' value='" . esc_attr($contactNumber) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('emailAddress') . "'>" . _e('Email Address') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('emailAddress') . "' name='" . $this->get_field_name('emailAddress') . "' type='text' value='" . esc_attr($emailAddress) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('faqUrl') . "'>" . _e('FAQ URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('faqUrl') . "' name='" . $this->get_field_name('faqUrl') . "' type='text' value='" . esc_attr($faqUrl) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('studentLoginUrl') . "'>" . _e('Student Login URL') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('studentLoginUrl') . "' name='" . $this->get_field_name('studentLoginUrl') . "' type='text' value='" . esc_attr($studentLoginUrl) . "'>";
	    echo "</p>";
		    
	    echo $args['after_widget'];
	   
	}
 
    public function update( $new_instance, $old_instance ) {  
        return $new_instance;
    }
 
    public function widget( $args, $instance ) {
        extract($args);

        if (!empty($instance['title'])) {
        	echo apply_filters('widget_title', $instance['title']);
        }

        echo "<ul class='secondaryHeader clearfix'>";

        if (!empty($instance['contactNumber'])) {
        	printf('<li><img src="%s"> %s</li>', get_bloginfo('stylesheet_directory') . '/assets/images/top-phone.png', $instance['contactNumber']);
        }

        if (!empty($instance['emailAddress'])) {
        	printf('<li><img src="%s"> <a href="mailto:%s">Contact Us</li>', get_bloginfo('stylesheet_directory') . '/assets/images/top-email.png', $instance['emailAddress']);
        }

        if (!empty($instance['faqUrl'])) {
        	printf('<li><img src="%s"> <a href="%s">FAQs</a></li>', get_bloginfo('stylesheet_directory') . '/assets/images/top-question.png', $instance['faqUrl']);
        }

        if (!empty($instance['studentLoginUrl'])) {
        	printf('<li><img src="%s"> <a href="%s">Student Login</a></li>', get_bloginfo('stylesheet_directory') . '/assets/images/top-login.png', $instance['studentLoginUrl']);
        }

        echo "</ul>";	
    }
}

?>