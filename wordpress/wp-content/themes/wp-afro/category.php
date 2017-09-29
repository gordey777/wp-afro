<?php get_header(); ?>
  <?php $cat__ID = get_queried_object()->cat_ID; ?>
    <article class="container white-bg">
      <div class="row">
        <div  id="loop-content" class="col-md-12 content news-cat">
          <?php
          $args = array(
                  'cat' => $cat__ID, //ID Рубрики
                  'post_type' => 'post',
                  'posts_per_page' => 3, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ
                  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
          query_posts($args); ?>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('looper row'); ?>>

              <a rel="nofollow" class="feature-img col-md-3 col-sm-4 col-xs-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail()) { ?>
                  <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } else if (get_field('gallery')) { ?>
                <?php $gallery = get_field('gallery'); ?>
                  <img src="<?php echo $gallery[0]['img']['sizes']['medium']; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
              </a><!-- /post thumbnail -->
              <div class="col-md-9 col-sm-8 col-xs-6">

                <h2 class="inner-title green-title">
                  <?php the_title(); ?>
                </h2>

                <?php wpeExcerpt('wpeExcerpt40'); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="green-btn right">Подробнее</a>
              </div>

            </div><!-- /looper -->
          <?php endwhile; endif; ?>
      </div><!-- /.content -->
    </div><!-- /.row -->
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>

      <script>
        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
      </script>

      <div class="row">
        <div class="col-md-12 pagination_ajax">
          <div id="true_loadmore" class="red-btn down">Показать еще</div>
        </div>
        <?php //get_template_part('pagination'); ?>
      </div><!-- /.row -->
    <?php endif;
     wp_reset_query(); ?>
  </article>

<?php get_footer(); ?>
