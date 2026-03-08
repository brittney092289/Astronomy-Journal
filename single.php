<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brittmillerspace
 */

get_header();
?>

<div class="page-sidebar-flex">
	<main id="primary" class="page-styles">
		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', 'single', get_post_type() );
			?>
			
			

			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'brittmillerspace' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'brittmillerspace' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>
<?php
get_footer();
