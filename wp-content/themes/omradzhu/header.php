<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omradzhu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'omradzhu' ); ?></a>

	<header id="masthead" class="site-header">
		<div></div>
		<div class="header-content">
			<div>
				<div class="social">
					<?  $youtube_link = CFS()->get( 'youtube_link' );
						$facebook_link = CFS()->get( 'facebook_link' );
						$instagram_link = CFS()->get( 'instagram_link' );?>
					
					<? if($facebook_link):?><a href="<?= $facebook_link['url'] ?>" class="facebook" target="_blank"></a><?endif;?>
					<? if($instagram_link):?><a href="<?= $instagram_link['url'] ?>" class="instagram" target="_blank"></a><?endif;?>
					<? if($youtube_link):?><a href="<?= $youtube_link['url']; ?>" class="youtube" target="_blank"></a><?endif;?>
				</div>
			</div>
		</div>
		<div></div>
		<? /*?>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'omradzhu' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<? */?>
	</header><!-- #masthead -->
