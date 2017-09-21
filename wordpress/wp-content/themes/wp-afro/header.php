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
      <div class="container">
        <div class="row head_top">

          <ul class="col-md-3 socials">
            <?php if( have_rows('socials', 35) ): ?>
            <?php while ( have_rows('socials',35) ) : the_row(); ?>
              <li>
                <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>" style="background-color: <?php the_sub_field('color'); ?>;"><i class="fa <?php the_sub_field('icon'); ?>"></i></a></li>
              <?php  endwhile; ?>
            <?php endif; ?>
          </ul>

          <div class="col-md-7  col-md-push-2 head_right">
            <div class="search_wrapp">
              <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
                <input class="search-input" type="search" name="s" placeholder="<?php _e( 'Поиск', 'wpeasy' ); ?>">
                <button class="search-submit" type="submit" role="button"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form><!-- /search -->
            </div>
            <ul class="lang_menu">
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-ru.png" alt="RU"></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-de.png" alt="DE"></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-fr.png" alt="FR"></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag-usa.png" alt="USA"></a></li>
            </ul>
          </div>

          <div class="logo col-md-2 col-md-pull-7">
            <?php if ( !is_front_page() && !is_home() ){ ?>
              <a href="<?php echo home_url(); ?>">
            <?php } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <div class="logo-title"><?php bloginfo('name'); ?></div>
            <?php if ( !is_front_page() && !is_home() ){ ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->

        </div><!-- /.row -->
      </div><!-- /.container -->
      <nav class="nav__header" role="navigation">
        <div class="container">
          <?php wpeHeadNav(); ?>
        </div><!-- /.container -->
      </nav><!-- /nav -->
    </header>


  <section role="main">
    <div class="inner">
