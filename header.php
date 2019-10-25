<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package game
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">	<!-- Solution style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-box">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex align-items-center header-box__container">
					<a class="logo" href="/games">
						<img src="<?php bloginfo('template_url'); ?>/images/logo-gold.png" class="logo__image" alt="Logo" height="42" width="42">
					</a>
					<nav class="top-nav offset-md-8">
						<a class="top-nav__link" href="">Program</a>
						<a class="top-nav__link" href="">Billetter</a>
						<a class="top-nav__link" href="">Kontakt</a>
					</nav>
				</div>
			</div>	
	</header>
</div>
