<?php
/**
 * The header for template-home.php
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gateway' ); ?></a>

  <header id="masthead" class="site-header" role="banner">

    <div class="stick">

      <!--nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true">

        <section class="top-bar-section">

          <?php

            $defaults = array(
                  'theme_location' =>  'primary',
                  'container'      =>  false,
                  'menu_class'     =>  'right',
                  'depth'          =>  5,
                  'fallback_cb'    => 'peru_sv_header_nav', // located at 'inc/template-tags.php'
                  'items_wrap'     =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'walker'         =>  new gateway_foundation_walker()
            );

            wp_nav_menu( $defaults ); 
          ?>

        </section>
        <section class="top-bar-section cta_header_button">
          <form>
            <button type="submit">
              Participa
            </button>
          </form>
        </section>

      </nav-->
      <nav class="psv-top-bar">
        <ul>
          <li>
          <a href="/" class="active">
            perusv
          </a>
          </li>
          <li>
            <a href="index.php/mision/">
              Mision
            </a>
          </li>
          <li>
            <a href="index.php/eventos-de-la-red/">
              Eventos
            </a>
          </li>
          <li>
            <a href="#">
              Contacto
            </a>
          </li>
        </ul>
      </nav>
      <section class="psv-cta-header-button">
          <form action="https://goo.gl/forms/yVnKg0IoyDnMWSdW2" target="new">
            <button type="submit">
              Únete a la Red
            </button>
          </form>
        </section>
      <hr>

    </div><!-- .sticky -->

  </header><!-- .row #masthead -->

    <div class="bg-image bg-image-header bg-center-center">

      <div class="site-branding">

        <?php 
          $header_logo = get_theme_mod( 'header_logo', customizer_library_get_default( 'header_logo' ) ); if ( ! $header_logo ) { ?>

          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

          <h2><?php bloginfo( 'description' ); ?></h2>

        <?php } else { ?>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo esc_url( $header_logo ); ?>" alt=""></a>

        <?php } ?>
        <div class = "psv-header-motto">
        <hr>
          <p>
            Red de peruanos en tecnología de Silicon Valley </br>
            Creando un puente de colaboración con el Perú
          </p>
        </div>

      </div><!-- .site-branding -->


    </div><!-- .bg-image .bg-image-header .bg-center-center -->
    <!--div class="peru-sv-slider-wrapper">
      <img src="wp-content/themes/gateway/img/perusv_bg_web.jpg">
      <div>Slide 1</div>
      <div>Slide 2</div>
      <div>Slide 3</div>
    </div-->

     <div class="psv-sub-banner">
      <div class="psv-sub-banner-container">
        <p>Preguntas. Ideas. Compártelas con la red:</p>
        <div class="psv-cta-sub-banner-button">
          <form action="https://goo.gl/forms/VjIt2IlFazHGaUY72" target="new">
            <button type="submit">
              Aquí
            </button>
          </form>
        </div>
      </div>
    </div><!-- .psv-sub-banner -->

  <div id="content" class="site-content">
