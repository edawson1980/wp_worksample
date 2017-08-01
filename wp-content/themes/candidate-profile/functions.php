<?php
  function candidateprofile_theme_styles(){
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('googlefont_css', "https://fonts.googleapis.com/css?family=Nunito");

  }


  add_action( 'wp_enqueue_scripts', 'candidateprofile_theme_styles' );
 ?>
