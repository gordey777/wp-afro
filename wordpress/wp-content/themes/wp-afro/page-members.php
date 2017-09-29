<?php /* Template Name: Members Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php edit_post_link(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>
      <div class="row">

        <?php if (have_rows('band_members')) { ?>


          <div class="members-wrapp col-md-12">
            <?php while(have_rows('band_members')) {
              the_row(); ?>
              <?php $image = get_sub_field('foto'); ?>

              <div class='looper row member'>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="member-img" <?php if ( !empty($image)) : ?>style="background-image: url(<?php echo $image['sizes']['thumbnail']; ?>);"<?php endif; ?>></div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-6">

                  <h2 class="inner-title green-title">
                    <?php the_sub_field('title'); ?>
                  </h2>

                  <div class="desc">
                    <?php the_sub_field('desc'); ?>
                  </div>
                  <div class="green-btn down red">Подробнее</div>
                </div>
              </div><!-- /looper -->

            <?php } // end while have rows ?>
          </div>
        <?php } // end if have_rows ?>
      </div><!-- /.row -->
    </article><!-- /.container -->

  <?php endwhile; endif; ?>

<?php get_footer(); ?>


