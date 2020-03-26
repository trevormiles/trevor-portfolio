<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trevors_Theme
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	
	<link rel="icon" href="/wp-content/themes/trevors-theme/assets/img/trev-favicon-optimized.jpg" type="image/x-icon" />
	
	<link rel="shortcut icon" href="/wp-content/themes/trevors-theme/assets/img/trev-favicon-optimized.jpg" type="image/x-icon" />
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet"/>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#list-example" data-offset="10" class="scrollspy-example">
	
