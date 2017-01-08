<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<head>
		<?php 
			if (is_active_sidebar('secondary_header')) {
				echo "<div id='secondaryHeader'>";
					echo "<div class='row'>";
						echo "<div class='large-12 columns'>";
							dynamic_sidebar('secondary_header');
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
		?>

		<div id="primaryHeader">
			<div class="row">
				<div id="logo" class="large-4 medium-4 small-8 columns">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo.jpg" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>

				<div id="mainMenu" class="large-8 medium-8 small-4 columns clearfix">
					<span id="triggerMobileMenu"></span>
					<div id="desktopMenu">
						<?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false, 'menu_class' => 'clearfix')); ?>
					</div>
				</div>
			</div>
		</div>
	</head>

	<div id="mobileMenu">
		<div id="wrapper">
			<div>
				<span id="closeMobileMenu"></span>
				<?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false, 'menu_class' => 'clearfix')); ?>
			</div>
		</div>
	</div>