<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php edit_post_link(); ?>
    <section role="main" class="home-section">

      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>

            <?php if( have_rows('main_slider') ): ?>
        <div id="home_slider" class="owl-carousel owl-theme">
          <?php while ( have_rows('main_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <?php $link = get_sub_field('link'); ?>
            <div class="item" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>

              <?php  if ( !empty($link)) { ?>
                <a href="<?php the_sub_field('link'); ?>">
              <?php } ?>

                <span class="slide-title"><?php the_sub_field('title'); ?></span>
              <?php  if ( !empty($link)) { ?>
                </a>
              <?php } ?>
            </div>
          <?php  endwhile; ?>
        </div>
      <?php endif; ?>

        <div class="row slider_wrapp">
          <div id="main-slider" class="slider owl-carousel owl-theme">
            <div class="slide item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home-slide.jpg" alt="">
              <div class="slide-cont">
                <a href="#" class="slide-btn red_btn">Принять участие</a>
              </div>
            </div>
            <div class="slide item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home-slide.jpg" alt="">
              <div class="slide-cont">
                <a href="#" class="slide-btn red_btn">Принять участие</a>
              </div>
            </div>
            <div class="slide item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home-slide.jpg" alt="">
              <div class="slide-cont">
                <a href="#" class="slide-btn red_btn">Принять участие</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <?php the_content(); ?>
          </div>
          <div class="col-md-6 video-wrapp"><img src="<?php echo get_template_directory_uri(); ?>/img/video-holder.jpg" alt=""></div>
          <div class="clearfix"></div>
          <div class="col-md-12">
            <h2 class="green-title">Сертификаты</h2>
            <div class="row certificate_wrapp">
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert1.jpg" alt="">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert2.jpg" alt="">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert1.jpg" alt="">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert2.jpg" alt="">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert1.jpg" alt="">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sert2.jpg" alt="">
              </div>
            </div>
          </div>
        </div><!-- /.row -->


      </article>
      <!-- /.container -->
    </section>

  <?php endwhile; endif; ?>


<?php get_footer(); ?>
