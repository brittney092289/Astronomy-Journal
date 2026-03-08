<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brittmillerspace
 */

get_header();
?>

<h1 style="margin: 30px auto; max-width: 900px; width: 90%;"><?php single_post_title(); ?></h1>
<div class="page-sidebar-flex">

	<main id="primary" class="page-styles">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
		);
		$the_query = new WP_Query( $args );
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<!-- <div style="visibility:hidden">
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</div> -->
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'cards', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<div style="flex-basis: 100%; text-align:center;">
		<?php
			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $the_query->max_num_pages
			) );
		?>
		</div>
	</main><!-- #main -->
	
	</div>
<?php
get_footer();
