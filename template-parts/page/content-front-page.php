<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="twinkling-stars-codepen">
	<div class="stars"></div>
	<div class="twinkling"></div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->		

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<div class="front-page-image">
		  	<img src="wp-content/themes/UniversalMusic/assets/images/book-cover-image.jpg" alt="Book cover image" />
			</div>
		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->

<audio autoplay loop>
  <source src="wp-content/themes/UniversalMusic/assets/audio/Millions of Stars loop.mp3" type="audio/mpeg">
  <source src="wp-content/themes/UniversalMusic/assets/audio/Millions of Stars loop.ogg" type="audio/ogg">
</audio>
