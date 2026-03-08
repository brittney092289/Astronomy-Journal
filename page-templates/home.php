<?php
/**
 * /* Template Name: Home 
 *
 * @package brittmillerspace
 */

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
	<link href="<?php bloginfo('/css/main.css'); ?>" rel = "stylesheet">
  </head>

  <body>
    <div id="header">
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
      
      <header>
        <div class="brand">
        <div class="logo">
				<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$brittmillerspace_description = get_bloginfo( 'description', 'display' );
			if ( $brittmillerspace_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $brittmillerspace_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
				</div>
          <div class="title">
            <h1>BRITTNEY MILLER</h1>
            <span>ASTRONOMY JOURNAL</span>
          </div>
        </div>
        <nav>
          <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
        </nav>
      </header>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
</html>