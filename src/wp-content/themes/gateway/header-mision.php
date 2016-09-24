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
      <?php get_template_part( 'template-parts/content-top-menu', get_post_format() ); ?>
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


    </div>

  <div id="content" class="site-content">
