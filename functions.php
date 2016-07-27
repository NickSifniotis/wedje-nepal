<?php
/*#########*/
/*#General#*/
/*#########*/

/*add theme styles*/
function theme_enqueue_styles() {
    wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri() . '/fonts/font-awesome/css/font-awesome.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/*################*/
/*#Custom Scripts#*/
/*################*/

/*Transparent Text Area with Custom Background for Contact Form*/
function wedje_script_contactformbackground() {
	wp_register_script( 'wedje-script-contactformbackground', get_stylesheet_directory_uri() . '/js/wedje_contactformbackground.js', array( 'jquery' ) );
	wp_enqueue_script( 'wedje-script-contactformbackground' ); 
}
add_action( 'wp_enqueue_scripts', 'wedje_script_contactformbackground' );

/*Fix of Pricebox Inline CSS*/
function wedje_script_priceboxfix() {
	wp_register_script( 'wedje-script-priceboxfix', get_stylesheet_directory_uri() . '/js/wedje_pricebox_fix.js', array( 'jquery' ) );
	wp_enqueue_script( 'wedje-script-priceboxfix' ); 
}
add_action( 'wp_enqueue_scripts', 'wedje_script_priceboxfix' );

/*Upload Contact Form*/
function wedje_script_contactupload() {
	wp_register_script( 'wedje-script-contactupload', get_stylesheet_directory_uri() . '/js/wedje_contact_upload.js', array( 'jquery' ) );
	wp_enqueue_script( 'wedje-script-contactupload' ); 
}
add_action( 'wp_enqueue_scripts', 'wedje_script_contactupload' );

/*##########*/
/*#Includes#*/
/*##########*/
/*Wedje Options*/
locate_template( 'includes/wedje_options.php', TRUE, TRUE );
/*include_once './includes/wedje_options.php'; For some reason this shit is broken. Don't know why but the above is a workaround.*/
?>
