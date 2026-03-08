<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brittmillerspace
 */

?>

    <footer>
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>  
        <div class="footer-copy">
            <div>
                <p>WordPress theme made by <a href="https://brittneymiller.tech" target="_blank">Brittney</a> 🪐</p>
            </div>
            <div class="widget-area">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer() ?>
</body>
</html>
