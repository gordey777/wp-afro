<?php get_header(); ?>
  <?php $cat__ID = get_queried_object()->cat_ID; ?>
    <article class="container white-bg">
      <div class="row">
        <div class="col-md-12 content gallery-cat">
        <div id="loop-content" class="row">
          <?php
          $args = array(
                  'cat' => $cat__ID, //ID Рубрики
                  'post_type' => 'post',
                  'posts_per_page' => 6, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ
                  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
          query_posts($args); ?>
          <?php if (have_posts()):  ?>

              <?php while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper gallery-item col-md-6 col-sm-6'); ?>>
    <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-6">
      <a rel="nofollow" class="ratio cat-gal-img " data-ratio="1" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
        style="background-image: url(<?php if ( has_post_thumbnail()) { ?>
          <?php echo the_post_thumbnail_url('thumbnail'); ?>
        <?php } else if (get_field('gallery')) { ?>
        <?php $gallery = get_field('gallery'); ?>
          <?php echo $gallery[0]['img']['sizes']['thumbnail']; ?>
        <?php } else { ?>
          <?php echo catchFirstImage(); ?>
        <?php } ?>
      )"></a><!-- /post thumbnail -->
      </div>
      <div class="loop-cont col-md-6 col-sm-6 col-xs-6">

        <h2 class="inner-title">
          <?php the_title(); ?>
        </h2>

        <?php wpeExcerpt('wpeExcerpt10'); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="green-btn right">Подробнее</a>
      </div>
  </div>
  </div><!-- /looper -->
            <?php endwhile; ?>
        <?php endif; ?>
          </div><!-- /.row -->
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>

      <script>
        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
        var valueButton = 'Еще фото';
        var valueAjax = 'Загрузка';

      </script>

        <div class="row">
          <div class="col-md-12 pagination_ajax">
            <div id="true_loadmore" class="red-btn down">Показать еще</div>
          </div>
          </div><!-- /.row -->
          </div><!-- /.content -->
      </div><!-- /.row -->
    <?php endif;
     wp_reset_query(); ?>
  </article>

<?php get_footer(); ?>
