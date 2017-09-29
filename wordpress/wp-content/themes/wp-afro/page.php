<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php edit_post_link(); ?>


      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>
        <div class="row">
          <div class="col-md-12 content">
          <h1 class="green-title page-title inner-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>

        </div><!-- /.row -->

      </article>
      <!-- /.container -->


  <?php endwhile; endif; ?>

<?php get_footer(); ?>
