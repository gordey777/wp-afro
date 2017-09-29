
              <div class='looper row member'>

                <a rel="nofollow" class="feature-img col-md-2 col-sm-4 col-xs-6" href="#" title="">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a><!-- /post thumbnail -->
                <div class="col-md-10 col-sm-8 col-xs-6">

                  <h2 class="inner-title green-title">
                    <?php the_sub_field('title'); ?>
                  </h2>

                  <div class="desc">
                    <?php the_sub_field('desc'); ?>
                  </div>
                  <div class="green-btn down red">Подробнее</div>
                </div>

              </div><!-- /looper -->

