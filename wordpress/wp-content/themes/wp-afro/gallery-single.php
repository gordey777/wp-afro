<?php
/*
Template Name: Gallery
Template Post Type: post, page
*/
 get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php edit_post_link(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>
      <div class="row">
        <div class="col-md-12">
          <?php easy_breadcrumbs(); ?>
        </div>
      </div>
        <div class="row">

        <?php if (have_rows('gallery')) { ?>

<div class="galery-wrapp col-md-12">
<div class="row">
                      <?php $gallery = get_field('gallery'); ?>


<?php if( $gallery ): ?>

  <?php
  $i_max = count($gallery);
  $n_max = ($i_max % 7) + 1;
  $i = 0;
  $k = 0;
  while ( $k < $n_max ) { ?>
    <?php if ( $i < $i_max ) { ?>




      <?php if ($i < $i_max ) { ?>
        <div class="col-md-4 col-xs-6">

          <?php if ($gallery[$i]['type'] ) { ?>

            <iframe class="gallery-video ratio" data-ratio="1.5" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
          <?php } else { ?>
            <a  class="gallery-item ratio" data-ratio="1.5" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox" style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php } ?>

      <?php if ($i < $i_max ) { ?>
        <div class="col-md-4 col-xs-6">
          <?php if ($gallery[$i]['type'] ) { ?>
            <iframe class="gallery-video ratio" data-ratio="1.5" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
          <?php } else { ?>
            <a  class="gallery-item ratio" data-ratio="1.5" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox"  style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php } ?>

      <div class="col-md-4">
        <div class="row">
                <?php if ($i < $i_max ) { ?>
              <div class="col-md-12 col-xs-6">
                <?php if ($gallery[$i]['type'] ) { ?>
                  <iframe class="gallery-video ratio" data-ratio=".71" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                <?php } else { ?>
                  <a  class="gallery-item ratio" data-ratio=".71" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox"  style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
               <?php } ?>
              </div>
              <?php $i++; ?>
            <?php } ?>
                <?php if ($i < $i_max ) { ?>
              <div class="col-md-12 col-xs-6">
                <?php if ($gallery[$i]['type'] ) { ?>

                  <iframe class="gallery-video ratio" data-ratio=".71" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                <?php } else { ?>
                  <a  class="gallery-item ratio" data-ratio=".71" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox"  style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
                <?php } ?>
              </div>
              <?php $i++; ?>
            <?php } ?>
        </div>
      </div>


      <?php if ($i < $i_max ) { ?>
        <div class="col-md-6 col-xs-6">

          <?php if ($gallery[$i]['type'] ) { ?>

            <iframe class="gallery-video ratio" data-ratio=".71" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
          <?php } else { ?>
            <a  class="gallery-item ratio" data-ratio=".71" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox" style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php } ?>

      <?php if ($i < $i_max ) { ?>
        <div class="col-md-3 col-xs-6">

          <?php if ($gallery[$i]['type'] ) { ?>

            <iframe class="gallery-video ratio" data-ratio="1.5" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
          <?php } else { ?>
            <a  class="gallery-item ratio" data-ratio="1.5" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox" style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php } ?>

      <?php if ($i < $i_max ) { ?>
        <div class="col-md-3 col-xs-6">
          <?php if ($gallery[$i]['type'] ) { ?>
            <iframe class="gallery-video ratio" data-ratio="1.5" src="https://www.youtube.com/embed/<?php echo $gallery[$i]['sub_video']['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
          <?php } else { ?>
            <a  class="gallery-item ratio" data-ratio="1.5" href="<?php echo  $gallery[$i]['img']['url']; ?>" rel="lightbox"  style="background-image: url(<?php echo $gallery[$i]['img']['sizes']['medium']; ?>);"></a>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php } ?>

    <?php
    }
    $k++;
}
endif; ?>

        <?php } // end if have_rows ?>
          </div><!-- /.row -->

        </div>
        </div><!-- /.row -->

      </article>
      <!-- /.container -->

  <?php endwhile; endif; ?>

<?php get_footer(); ?>










