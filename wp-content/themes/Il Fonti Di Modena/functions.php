<?php
//Registro de styles

function register_enqueue_style() {
    $theme_data = wp_get_theme();

 /* Registrando estilos */
  wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Work+Sans:400,500,600,700', null, null, 'screen'); 
  wp_register_style('animate', get_theme_file_uri('/assets/css/boostrap/otros/animate.css'), null, '1.0', 'screen');
  wp_register_style('bootstrapmin', get_theme_file_uri('/assets/css/boostrap/boostrap.min.css'), null, '1.0', 'screen');
  wp_register_style('font awesome', get_theme_file_uri('/assets/css/others/font-awesome.min.css'), null, '1.0', 'screen');
  wp_register_style('magnific popup', get_theme_file_uri('/assets/css/others/magnific-popup.css'), null, '1.0', 'screen');
  wp_register_style('carousel', get_theme_file_uri('/assets/css/others/owl.carousel.min.css'), null, '1.0', 'screen');
  wp_register_style('icons', get_theme_file_uri('/assets/css/others/pe-icon-7-stroke.css'), null, '1.0', 'screen');
  wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, '1.0', 'screen');
  wp_register_style('cssresponsive', get_theme_file_uri('/assets/css/responsive/responsive.css'), null, '1.0', 'screen');
 



 /* Estilos en cola */
 wp_enqueue_style('fonts');
 wp_enqueue_style('animate');
 wp_enqueue_style('bootstrapmin');
 wp_enqueue_style('font awesome');
 wp_enqueue_style('magnific popup');
 wp_enqueue_style('carousel');
 wp_enqueue_style('icons');
 wp_enqueue_style('style');
 wp_enqueue_style('cssresponsive');
 
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );



//Registro de scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  /* Deregistrando scripts */
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

 /* Registrando scripts */
 wp_register_script('jquery', get_theme_file_uri('/assets/js/jquery/jquery-2.2.4.min.js'),
 '4.1.1',null, true);
 wp_register_script('popper', get_theme_file_uri('/assets/js/bootstrap/popper.min.js'),
null, '3.2.1',true);
wp_register_script('bootstrap4', get_theme_file_uri('/assets/js/bootstrap/bootstrap.min.js'),
'4.1.1',null, true);
wp_register_script('all plugins', get_theme_file_uri('/assets/js/others/plugins.js'),
'4.1.1',null, true);
wp_register_script('active js', get_theme_file_uri('/assets/js/active.js'),
'4.1.1',null, true);

 /* Estilos en cola */
 wp_enqueue_script('jquery');
 wp_enqueue_script('popper');
 wp_enqueue_script('bootstrap4');
 wp_enqueue_script('all plugins');
 wp_enqueue_script('active js');
 
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


//logo personalizable

function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );


?>