<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php
//RANDOM IMAGES AND TEXT
//   $bg = array('colin-1.jpg', 'Fiona-Gray-Flight-of-Light-Promo-Image-1024x714.jpg', 'coffee-perhaps.jpg', 'act-of-passage.jpg', 'Chora-Carleton-watercolour-1024x576.jpg', 'taniwha.jpg', 'Lillico03-0-552-0-0.jpg' ); // array of filenames
//   $txt = array("Colin McCahon | Kitchener St", "Fiona Gray | Flight of Light", "Erica Van Zon | Coffee Perhaps", "Acts of Passage | Te Tuhi Offsite", "Chora Luz Carleton | Gloaming", "Owen Mapp | Dragons & Taniwha – Fifty Years an Artist Carver", "Kirsty Lillico |Happy Together" ); // array of filenames
//   $i = rand(0, count($bg)-1); 
//   $i = rand(0, count($txt)-1); 
//   $selectedBg = "$bg[$i]"; 
//   $selectedTxt = "$txt[$i]"; 
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Lato:300|Montserrat:300|Alegreya+Sans:400|Grand+Hotel" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	

	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	
	</header>
