<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <meta name="author" content="Chikaylah">
   <meta name="description" content="HELP Wellington is a not-for-profit organisation that aids in and supports those that have been affefcted by sexual harm.">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>

      <nav class="navbar navbar-expand-lg primary-nav">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'container_class' => 'main-nav',
            'menu_class' => 'top-bar'
            )
          );
          ?>
        </div>
      </nav>
      <div class="navbar secondary-nav myTheme">
        <form class="form-inline">
          <?php get_search_form(); ?>
        </form>
      </div>

    </header>
