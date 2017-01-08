<?php 
	global $data;
	get_header();

	echo "<div id='homepageBanner'>";
		if (is_active_sidebar('social_media_one')) {
			echo "<div id='socialMediaWrapper'>";
				echo "<div id='socialMedia'>";
					dynamic_sidebar('social_media_one');
				echo "</div>";
			echo "</div>";
		}

		if (is_active_sidebar('student_login')) {
			echo "<div id='studentLoginWrapper'>";
				echo "<div id='studentLogin'>";
					dynamic_sidebar('student_login');
				echo "</div>";
			echo "</div>";
		}

		if (is_active_sidebar('customer_support')) {
			echo "<div id='customerSupportWrapper'>";
				echo "<div id='customerSupport'>";
					dynamic_sidebar('customer_support');
				echo "</div>";
			echo "</div>";
		}
	echo "</div>";

	if (($data['courses']) || ($data['coursesTitle'])) {
		echo "<div id='courses'>";
			if ($data['coursesTitle']) {
				echo "<div class='row'>";
					echo "<div class='large-12 columns'>";
						printf('<h2>%s</h2>', $data['coursesTitle']);
					echo "</div>";
				echo "</div>";
			}

			if ($data['courses']) {
				echo "<div class='row'>";
					foreach ($data['courses'] as $course) {
						echo "<div class='large-3 medium-3 columns'>";
							echo "<div class='course'>";
								printf('<h5>%s</h5>', $course['title']);
								printf('<p>%s</p>', $course['description']);
								printf('<a class="sthsButton" href="%s">Learn more</a>', $course['link']);
							echo "</div>";
						echo "</div>";
					}
				echo "</div>";
			}
		echo "</div>";
	}

	if (($data['aboutUsTitle']) || $data['aboutUsContent']) {
		echo "<div id='aboutUs'>";
			echo "<div class='row'>";
				echo "<div class='large-8 medium-8 large-centered medium-centered columns'>";
					if ($data['aboutUsTitle']) {
						printf('<h2>%s</h2>', $data['aboutUsTitle']);
					}

					if ($data['aboutUsContent']) {
						printf('<p>%s</p>', $data['aboutUsContent']);
					}
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}

	get_footer();
?>