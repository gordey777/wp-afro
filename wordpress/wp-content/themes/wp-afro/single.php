<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php edit_post_link(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>
        <div class="row title-row">
          <?php if ( has_post_thumbnail()) { ?>
            <div class="col-sm-2 col-xs-6">
              <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </div>
          <?php } ?>
          <div class="col-sm-10 col-xs-6">
            <h1 class="green-title page-title inner-title"><?php the_title(); ?></h1>
            <span class="date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></span>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 content">
            <?php the_content(); ?>
          </div>
        </div><!-- /.row -->

      </article>
      <!-- /.container -->

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
