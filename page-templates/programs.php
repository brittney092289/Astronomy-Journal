<?php
/**
 * Template Name: Program Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brittmillerspace
 */

get_header();
?>


<h1 style="margin: 30px auto; max-width: 900px; width: 90%;"><?php the_title(); ?></h1>
<div class="page-sidebar-flex">

<main id="primary" class="page-styles">
	
	
<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	
	    <!-- </?php echo '<p>'. get_the_category()[0]->name .'</p>'; ?>
        </?php echo "Current Category ID is: " . get_the_category()[0]->term_id;?> -->

        <!-- $categories = get_the_category();
        var_dump($categories);  -->
        
       





    <!-- Category Archive Start -->
    
    	<div class="op-cards">

       
	
	<?php
        $pageCat = get_the_category()[0]->name;
        $args = ( array(
            'category_name'  => $pageCat,
            'posts_per_page' => -1
        ) );
        // the query
        $the_query = new WP_Query( $args ); 

		if ( $the_query->have_posts() ) :

			/* Start the Loop */
			while ( $the_query->have_posts() ) :
				$the_query->the_post();

				get_template_part( 'template-parts/content', 'cards', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
    <!-- Category Archive End -->
    </main>
<?php
get_footer();
