<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action('et_header_top'); ?>
    	<header id="main-header">
		<div class="container">
			<div id="top-area" class="clearfix">
				<div class="float-left"><?php $logo = ( ( $user_logo = et_get_option('divi_logo') ) && '' != $user_logo ) ? $user_logo : get_template_directory_uri() . "/images/logo.png"; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo"/></a></div>
				<div id="wedje-header-contact-button-container">
					<div class="header-info-item"><p>Give us a call today:</p><p><?php $wedje_options = get_option('wedje_option'); $wedje_phone_number = $wedje_options['contact_number']; if ( $wedje_phone_number != '' ) $wedje_html_phone_number = '<span class="fa fa-phone"></span>' . $wedje_phone_number . '<br />'; echo $wedje_html_phone_number; ?></p></div>
					<div class="header-info-item"><a id="wedje-header-contact-button" href="<?php $wedje_contact_button_link = $wedje_options['contact_button_link']; $wedje_contact_button_text = $wedje_options['contact_button_text']; echo $wedje_contact_button_link; ?>"><?php echo $wedje_contact_button_text ?></a></div>
				</div>
			</div> <!-- end #top-area -->
			<?php do_action('et_header_menu'); ?>
				<nav id="top-menu">
					<?php
						$menuClass = 'nav';
						$primaryNav = '';

						$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );

						if ( '' == $primaryNav ) { ?>
							<ul class="<?php echo esc_attr( $menuClass ); ?>">
								<?php if ( 'on' == et_get_option( 'divi_home_link' ) ) { ?>
									<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','Divi') ?></a></li>
								<?php } ?>

								<?php show_page_menu( $menuClass, false, false ); ?>
								<?php show_categories_menu( $menuClass, false ); ?>
							</ul>
					<?php }
						else echo($primaryNav);
					?>
				</nav>
        </div> <!-- end .container -->

		<?php if ( 'on' == et_get_option( 'divi_featured', 'on' ) && is_home() ) get_template_part( 'includes/featured', 'home' ); ?>

		<?php 
			$wedje_options = get_option('wedje_option');

			if ( $wedje_options['breadcrumb_active'] == 'active' ) get_template_part( 'includes/breadcrumbs'); ?>

	</header> <!-- end #main-header -->
	