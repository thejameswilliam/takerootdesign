<?php
// the query
$args = array(
  'post_type' => 'root-slides',
  'posts_per_page' => -1,
);
$the_query = new WP_Query( $args );
if(mapi_is_mobile()) :
  $height = 700;
  $width = 700;
elseif(is_home()) :
  $height = 700;
  $width = 1500;
else :
  $height = 400;
  $width = 1500;
endif;
?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="root-slider">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $image = get_field('image');
    $image_url = mapi_thumb($image['url'],$width,$height,90);
  ?>
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image['title']; ?>"/>
	<?php endwhile; ?>
</div>
  <?php endif; ?>
	<?php wp_reset_postdata(); ?>
