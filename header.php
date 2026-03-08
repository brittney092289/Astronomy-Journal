<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brittmillerspace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<!--test-->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'brittmillerspace' ); ?></a>

	
		<div class="site-branding">
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
				<div id="menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div><!-- #site-navigation -->
				</nav>
			</header>
			</div>
			
		</div><!-- .site-branding -->

