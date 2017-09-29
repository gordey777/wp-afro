

<?php if ( in_category( 10 ) || post_is_in_descendant_category( 10 ) ){ ?>



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
      <div class="col-md-6 col-sm-6 col-xs-6">

        <h2 class="inner-title">
          <?php the_title(); ?>
        </h2>

        <?php wpeExcerpt('wpeExcerpt10'); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="green-btn right">Подробнее</a>
      </div>
  </div>
  </div><!-- /looper -->




<?php } else{ ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class('looper row'); ?>>

    <a rel="nofollow" class="feature-img col-md-3 col-sm-4 col-xs-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->
    <div class="col-md-9 col-sm-8 col-xs-6">

      <h2 class="inner-title green-title">
        <?php the_title(); ?>
      </h2>
      <span class="date"><?php the_time('j F Y'); ?></span>
      <?php wpeExcerpt('wpeExcerpt40'); ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="green-btn right">Подробнее</a>
    </div>

  </div><!-- /looper -->
<?php } ?>
