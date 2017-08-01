<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="##6D5C89">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6D5C89">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="wrapper">
    <header>
      <h1>Candidate Profile</h1>

      <?php
        $defaults = array (
          'container' => false,
          'theme_location' => 'primary-menu',
        );

        wp_nav_menu($defaults);

      ?>


    </header>
