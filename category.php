<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brittmillerspace
 */

get_header();
?>
<div class="page-sidebar-flex">
	<main id="primary" class="page-styles">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <h2><?php the_title(); ?></h2>
        <div class="entry">
            <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        </div>
    </div>
    <?php endwhile; endif; ?>

    <!-- Category Archive Start -->
    <ul class="catArchive">
    <?php
    $catQuery = $wpdb->get_results("SELECT * FROM $wpdb->terms AS wterms INNER JOIN $wpdb->term_taxonomy AS wtaxonomy ON ( wterms.term_id = wtaxonomy.term_id ) WHERE wtaxonomy.taxonomy = 'category' AND wtaxonomy.parent = 0 AND wtaxonomy.count > 0");

    $catCounter = 0;

    foreach ($catQuery as $category) {

        $catCounter++;

        $catStyle = '';
        if (is_int($catCounter / 2)) $catStyle = ' class="catAlt"';

        $catLink = get_category_link($category->term_id);

        echo '<li'.$catStyle.'><h3><a href="'.$catLink.'" title="'.$category->name.'">'.$category->name.'</a></h3>';
            echo '<ul>';

            query_posts('cat='.$category->term_id.'&showposts=5');?>

            <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>

                <li><a href="<?php echo $catLink; ?>" title="<?php echo $category->name; ?>">More <strong><?php echo $category->name; ?></strong></a></li>
            </ul>
        </li>
        <?php } ?>
    </ul>
    <!-- Category Archive End -->

    </main>
    <?php
get_sidebar();
get_footer();