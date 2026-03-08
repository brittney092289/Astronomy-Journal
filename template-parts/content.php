<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brittmillerspace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-header">
		<div class="entry-header-flex">
			<div style="display:flex;justify-content:center;"><?php brittmillerspace_post_thumbnail(); ?></div>
			
				<?php 
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
					<div><?php brittmillerspace_posted_on(); ?></div>
						<div><?php brittmillerspace_program(); ?></div>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			
			<div class="entry-title-meta-flex">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif; ?>
				<div class="entry-content">
					<?php

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brittmillerspace' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->
				
				

				<div class="entry-footer">
					<?php brittmillerspace_entry_footer(); ?>
				</div><!-- .entry-footer -->
			</div>
		</div>

		
	</div><!-- .entry-header -->

	

	
</article><!-- #post-<?php the_ID(); ?> -->
