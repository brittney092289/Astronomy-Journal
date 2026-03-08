<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brittmillerspace
 */

?>
<?php $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="entry-header-flex" style="background: url('<?php echo $featured_img_url['0'];?>'); background-size: cover; background-repeat: no-repeat; background-position: center; border-radius: 10px;">
			<div class="card-content">
            	<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif; ?>
			</div>
		</div>

		
	</div><!-- .entry-header -->

	

	
</article><!-- #post-<?php the_ID(); ?> -->
