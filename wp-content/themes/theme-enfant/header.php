<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>


<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div id="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_theme_mod('montheme_logo'); ?>" alt=""></a>
			</div>
			</a>
			<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(array(
					'theme_location' => 'header',
					'menu_class' => 'header-menu', // Classe CSS pour le menu
					
				)); ?>
			</nav>
		</header>
		