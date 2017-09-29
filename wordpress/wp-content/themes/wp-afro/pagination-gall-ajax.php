

  <div id="post-<?php the_ID(); ?>" <?php post_class('looper gallery-item co-sm-6'); ?>>

    <a rel="nofollow" class="cat-gal-img col-md-2 col-sm-4 col-xs-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
      style="style="background-image: url(<?php if ( has_post_thumbnail()) { ?>
        <?php echo the_post_thumbnail_url('thumbnail'); ?>
      <?php } else if (get_field('gallery')) { ?>
      <?php $gallery = get_field('gallery'); ?>
        <?php echo $gallery[0]['img']['sizes']['thumbnail']; ?>
      <?php } else { ?>
        <?php echo catchFirstImage(); ?>
      <?php } ?>
    )"></a><!-- /post thumbnail -->
    <div class="col-md-10 col-sm-8 col-xs-6">

      <h2 class="green-title">
        <?php the_title(); ?>
      </h2>

      <?php wpeExcerpt('wpeExcerpt40'); ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="green-btn right">Подробнее</a>
    </div>

  </div><!-- /looper -->
