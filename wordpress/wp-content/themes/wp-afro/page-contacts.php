<?php /* Template Name: Contacts Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php edit_post_link(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(' container white-bg'); ?>>
        <div class="row map-row">
<div class="col-md-12">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcayTYSI4rr00RHsTKXYNHSRY5JnMcAYY"></script>
<script type="text/javascript">
(function($) {



function new_map( $el ) {

  var $markers = $el.find('.marker');

  var args = {
    zoom    : 16,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map( $el[0], args);

  map.markers = [];

  $markers.each(function(){

      add_marker( $(this), map );

  });

  center_map( map );

  return map;

}

function add_marker( $marker, map ) {
  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });

  map.markers.push( marker );

  if( $marker.html() )
  {

    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}

function center_map( map ) {
  var bounds = new google.maps.LatLngBounds();
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  if( map.markers.length == 1 )
  {

      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {

    map.fitBounds( bounds );
  }

}

var map = null;
$(document).ready(function(){
  $('.acf-map').each(function(){
    map = new_map( $(this) );
  });
});

})(jQuery);
</script>

<?php

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
  <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>
</div>
        </div><!-- /.row -->
        <div class="row contacts-row">
          <div class="col-md-5 col-md-offset-1 col-sm-7">
            <?php the_content(); ?>
            <div class="contact"><span class="title">Телефон: </span><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></div>
            <div class="contact"><span class="title">Email: </span><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></div>
            <div class="contact"><span class="title">Website: </span><?php the_field('site'); ?></div>
          </div>
        </div><!-- /.row -->

      </article><!-- /.container -->


  <?php endwhile; endif; ?>









<?php get_footer(); ?>
