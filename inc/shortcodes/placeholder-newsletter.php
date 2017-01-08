<?php 

add_shortcode('placeholder_newsletter', 'init_placeholder_newsletter');
add_filter('widget_text','do_shortcode');

function init_placeholder_newsletter($atts) {
	$html = "<div id='placeholderNewsletter'>";
		$html .= "<form class='clearfix'>";
			$html .= "<input type='text' placeholder='Name'>";
			$html .= "<input type='text' placeholder='Email'>";
			$html .= "<input type='submit' value='Sign up'>";
		$html .= "</form>";
	$html .= "</div>";

	return $html;
}