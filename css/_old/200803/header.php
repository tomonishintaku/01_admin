<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php include("../inc/meta.php"); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script src="/js/css_browser_selector.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Begin Body -->
<body <?php body_class(); ?>>
<div id="wrap" class="clearfix">
 <?php include("../../inc/header.php"); ?>