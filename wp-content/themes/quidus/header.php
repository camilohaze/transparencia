<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('quidus_site_favicon') != '' ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('quidus_site_favicon')); ?>" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
    <script>
        window.onload = function()
        {
            jQuery('#menu-menu-principal > .current-menu-item > button').click();
            jQuery('#menu-menu-principal > .current-menu-parent > button').click();
        }
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quidus' ); ?></a>

	<header>
		<div class="logo-transparencia">
            <a href="<?php echo get_home_url(); ?>" title="Logo Telemedellín.">
                <img src="<?php echo get_home_url(); ?>/wp-content/themes/quidus/img/logo-tm.png" alt="Logo transparencia">
            </a>
        </div>
		<div class="buscador">
            <div>
                <div class="caja-buscador">
                    <div class="icon-buscador">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/quidus/img/lupa.png" alt="Lupa">
                    </div>
                    <div class="caja-texto">
                        <?php $action = function_exists( 'icl_get_home_url' ) ? icl_get_home_url() : get_home_url(); ?>

                        <form action="<?php echo $action; ?>" id="responsiveSearch" method="get" role="search">
                            <span class="icon-buscador">
                                <img src="<?php echo get_home_url(); ?>/wp-content/themes/quidus/img/lupa.png" alt="Lupa">
                            </span>
                            <span class="caja-texto">
                                <input type="search" name="s" class="form-control" value="" placeholder="Buscar">
                            </span>
                        </form>
                    </div>
                </div>
                <div class="logo-tm">
                    <a href="http://www.telemedellin.tv" title="Logo Telemedellín.">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/quidus/img/logo-tm-small.png" alt="Logo telemedellin">
                    </a>
                </div>
            </div>
        </div>
	</header>

	<div class="main-content">
		<div id="sidebar" class="sidebar">
			<?php get_sidebar(); ?>
		</div><!-- .sidebar -->

		<div id="content" class="site-content">
