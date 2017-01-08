<?php

add_action( 'widgets_init', 'customerSupportWidget' );
 
function customerSupportWidget() {
    register_widget( 'CustomerSupportWidget' );
}
 
class CustomerSupportWidget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'CustomerSupportWidget',
            'description' => 'Display customer support links.'
        );
 
        parent::__construct( 'CustomerSupportWidget', 'Customer Support Widget', $widget_details );
 
    }

    /*
	 * facebook
	 * twitter
	 *
    */
 
    public function form( $instance ) {
	    $title 			= '';
	    $liveChat 		= '';
	    $moreInfo 		= '';
	    $fundingEnquiry = '';

	    if (!empty($instance['title'])) {
	    	$title = $instance['title'];
	    }

	    if (!empty($instance['liveChat'])) {
	    	$liveChat = $instance['liveChat'];
	    }

	    if (!empty($instance['moreInfo'])) {
	    	$moreInfo = $instance['moreInfo'];
	    }

	    if (!empty($instance['fundingEnquiry'])) {
	    	$fundingEnquiry = $instance['fundingEnquiry'];
	    }

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('title') . "'>" . _e('Title') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('title') . "' name='" . $this->get_field_name('title') . "' type='text' value='" . esc_attr($title) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('liveChat') . "'>" . _e('Live Chat') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('liveChat') . "' name='" . $this->get_field_name('liveChat') . "' type='text' value='" . esc_attr($liveChat) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('moreInfo') . "'>" . _e('More Info') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('moreInfo') . "' name='" . $this->get_field_name('moreInfo') . "' type='text' value='" . esc_attr($moreInfo) . "'>";
	    echo "</p>";

	    echo "<p>";
	    	echo "<label for='" . $this->get_field_name('fundingEnquiry') . "'>" . _e('Funding Enquiry') . "</label>";
	    	echo "<input class='widefat' id='" . $this->get_field_id('fundingEnquiry') . "' name='" . $this->get_field_name('fundingEnquiry') . "' type='text' value='" . esc_attr($fundingEnquiry) . "'>";
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

        echo "<ul class='customerSupport clearfix'>";

        if (!empty($instance['liveChat'])) {
        	printf('<li><a href="%s" class="liveChatIcon">Live Chat</a></li>', $instance['liveChat']);
        }

        if (!empty($instance['moreInfo'])) {
        	printf('<li><a href="%s" class="moreInfoIcon">More Info</a></li>', $instance['moreInfo']);
        }

        if (!empty($instance['fundingEnquiry'])) {
        	printf('<li><a href="%s" class="fundingEnquiryIcon">Funding Enquiry</a></li>', $instance['fundingEnquiry']);
        }

        echo "</ul>";	
    }
}

?>