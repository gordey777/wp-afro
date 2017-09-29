<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">

    <header role="banner">
      <div class="container head_top">
        <div class="row">

          <div class="logo col-md-2 col-md-push-3 col-sm-6">
            <?php if ( !is_front_page() && !is_home() ){ ?>
              <a href="<?php echo home_url(); ?>">
            <?php } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <div class="logo-title"><?php bloginfo('name'); ?></div>
            <?php if ( !is_front_page() && !is_home() ){ ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->

          <ul class="col-md-3 col-md-pull-2 col-sm-6 socials">
            <?php if( have_rows('socials', 35) ): ?>
            <?php while ( have_rows('socials',35) ) : the_row(); ?>
              <li>
                <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>" style="background-color: <?php the_sub_field('color'); ?>;"><i class="fa <?php the_sub_field('icon'); ?>"></i></a></li>
              <?php  endwhile; ?>
            <?php endif; ?>
          </ul>


        </div><!-- /.row -->
      </div><!-- /.container -->
      <nav class="nav__header" role="navigation">
        <div class="container">
          <div class="row nav-container">
            <?php wpeHeadNav(); ?>

            <div class="col-md-5 col-sm-7 head_right">
              <ul class="lang_menu">
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-ru.png" alt="RU"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-de.png" alt="DE"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-fr.png" alt="FR"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-usa.png" alt="USA"></a></li>
              </ul>
              <div class="search_wrapp">
                <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
                  <input class="search-input" type="search" name="s" placeholder="<?php _e( 'Поиск', 'wpeasy' ); ?>">
                  <button class="search-submit" type="submit" role="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form><!-- /search -->
              </div>
            </div>

          </div><!-- /.row -->
          <div id="hamburger" class="visible-xs humb-toggle-switch humb-toggle-switch__htx"><span>toggle menu</span></div>
        </div><!-- /.container -->

      </nav><!-- /nav -->
      <div id="overlay_mob"></div>

    </header>


    <section role="main" class="home-section">

