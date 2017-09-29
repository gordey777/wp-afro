<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php edit_post_link(); ?>


      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>

        <?php if( have_rows('home_slider') ): ?>
          <div class="row slider_wrapp">
            <div id="main-slider" class="slider owl-carousel owl-theme">

              <?php while ( have_rows('home_slider') ) : the_row(); ?>
                <?php $image = get_sub_field('img'); ?>
                <?php $link = get_sub_field('link'); ?>

                <div class="slide item">
                  <?php if ( !empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="">
                  <?php endif; ?>
                  <div class="slide-cont col-md-5 col-sm-7 col-xs-12">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <?php the_sub_field('content'); ?>
                    <span class="slide-date"><?php the_sub_field('date'); ?></span>

                    <?php  if ( !empty($link)) { ?>
                      <a href="<?php the_sub_field('link'); ?>" class="slide-btn red-btn">Принять участие</a>
                    <?php } ?>

                  </div>
                </div>
              <?php  endwhile; ?>

            </div>
          </div>
        <?php endif; ?>

        <div class="row">
          <div class="col-md-6">
            <?php the_content(); ?>
          </div>

          <?php $front_video = get_field('front_video');

          if ( !empty($front_video)) : ?>
          <div class="col-md-6 video-wrapp">
              <iframe class="yt_video" src="https://www.youtube.com/embed/<?php echo $front_video['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
            </div>
          <?php endif; ?>


        </div><!-- /.row -->
        <div class="row sertificats">
          <?php if( have_rows('sertificats') ): ?>
            <div class="col-md-12">
              <h2 class="green-title">Сертификаты</h2>
              <div class="row certificate_wrapp">

                <?php while ( have_rows('sertificats') ) : the_row(); ?>
                  <?php $image = get_sub_field('img'); ?>
                  <?php $link = get_sub_field('link'); ?>
                  <div class="col-md-2 col-sm-4 col-xs-6 certificate_ithem">
                    <?php if ( !empty($image)) : ?>
                      <a href="<?php echo $image['url']; ?>" rel="lightbox" title="<?php the_sub_field('title'); ?>">
                        <img src="<?php echo $image['sizes']['small']; ?>" alt="<?php the_sub_field('title'); ?>">
                      </a>
                    <?php endif; ?>
                  </div>
                <?php  endwhile; ?>

              </div>
            </div>
          <?php endif; ?>


        </div><!-- /.row -->


      </article>
      <!-- /.container -->


  <?php endwhile; endif; ?>


<?php get_footer(); ?>
