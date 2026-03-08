<?php
/**
 * Template Name: Observing Programs
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
	<div class="op-cards"> 
	<?php
        if($post->post_parent){
            $children = get_pages("child_of=".$post->post_parent);
            $parent_title = get_the_title($post->post_parent);
            $link = get_permalink($post->post_parent);
        }
        else{
            $children = get_pages("child_of=".$post->ID);
            $parent_title = get_the_title($post->ID);
            $link = get_permalink($post->ID);
            $parent_page = $post->ID;
        }
        if ($children) {
        ?>
            
            <?php 
                foreach( $children as $post ) : setup_postdata($post); 
            ?>
			<?php $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			  

					<?php get_template_part( 'template-parts/content', 'cards', get_post_type() ); ?>
		
            <?php 
                endforeach;
            ?>

        <?php 
        }
        ?>
</div>
    </main>
		</div>
<?php
get_footer();
