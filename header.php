
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>



    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">

      <a class="navbar-brand" href="<?php bloginfo( 'url'); ?>"><?php bloginfo( 'name'); ?></a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <?php
        $defaults = array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'ul',
        'container_class' => 'navbar-nav mr-auto',
        'container_id'    => '',
        'menu_class'      => 'nav-item',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        );
        wp_nav_menu( $defaults );
        ?>

      </div>
    </nav>
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/img/1.jpg" class="img-fluid">
      </div>
    </div>

