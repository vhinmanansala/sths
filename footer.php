<?php 
	
	if ((is_active_sidebar('social_media_two')) || (is_active_sidebar('newsletter'))) {
		echo "<div id='secondaryFooter'>";
			echo "<div class='row'>";
				if (is_active_sidebar('social_media_two')) {
					echo "<div class='large-5 medium-5 columns'>";
						dynamic_sidebar('social_media_two');
					echo "</div>";
				}

				if (is_active_sidebar('newsletter')) {
					echo "<div class='large-7 medium-7 columns'>";
						dynamic_sidebar('newsletter');
					echo "</div>";
				}
			echo "</div>";
		echo "</div>";
	}

	if ((is_active_sidebar('footer_1')) || (is_active_sidebar('footer_2')) || (is_active_sidebar('footer_3')) || (is_active_sidebar('footer_4')) || (is_active_sidebar('footer_5'))) {
		echo "<div id='primaryFooter'>";
			echo "<div id='footerSidebars'>";
				echo "<div class='row'>";

					for($count = 1; $count <= 5; $count++) {
						echo "<div class='large-2 medium-2 columns'>";
							dynamic_sidebar('footer_' . $count);
						echo "</div>";
					} 

				echo "</div>";
			echo "</div>";

			echo "<div id='copyright'>";
				echo "<div class='row'>";
					echo "<div class='large-12 columns'>";
						echo "<span>© Copyright 2015 SHTS University, All rights reserved</span><br>";

						echo "<div id='footerMenu'>";
							wp_nav_menu(array('menu' => 'Main Menu', 'container' => false, 'menu_class' => 'clearfix'));
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}

	wp_footer(); 
?>

</body>
</html>
