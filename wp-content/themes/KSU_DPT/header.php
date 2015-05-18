<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package KSU_DPT
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The official parking and transportation page at Kennesaw State University, the place to find information on student parking, faculty/staff parking, visitor information, and transportation and shuttle schedules.">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Kennesaw State University Department of Parking &amp; Transportation – Learn more about parking on our campuses"/>
<meta property="og:description" content="The official parking and transportation page at Kennesaw State University, the place to find information on student parking, faculty/staff parking, visitor information, and transportation and shuttle schedules."/>
<meta property="og:url" content="http://parking.kennesawstateauxiliary.com"/>
<meta property="og:site_name" content="Kennesaw State University Department of Parking &amp; Transportation"/>
<meta property="og:image" content="/wp-content/themes/KSU_DPT/images/socialfeed.jpg"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="The official parking and transportation page at Kennesaw State University, the place to find information on student parking, faculty/staff parking, visitor information, and transportation and shuttle schedules."/>
<meta name="twitter:title" content="Kennesaw State University Department of Parking &amp; Transportation – Learn more about parking on our campuses"/>
<meta name="twitter:site" content="@parkingatksu"/>
<meta name="twitter:domain" content="Kennesaw State University Department of Parking &amp; Transportation"/>
<meta name="twitter:image:src" content="/wp-content/themes/KSU_DPT/images/socialfeed.jpg"/>
<meta name="twitter:creator" content="@parkingatksu"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/img/icons/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/icons/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/icons/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/img/icons/apple-touch-icon-precomposed.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<!--<?php include('off-canvas.php'); ?>-->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'great-outdoors' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		 <div class="top-bar-container contain-to-grid">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
					   <div class="brand show-for-small-only hide-for-print"><p>KSU Dept. of Parking &amp; Transportation</p></div>
					   <div class="brand show-for-medium-only hide-for-print"><p>Kennesaw State University Department of Parking &amp; Transportation</p></div>
					   <div class="show-for-medium-up">
						<h1>
							<a href="<?php echo esc_url( home_url( '/ ') ); ?>">
								<img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/images/dpt_logo.png' ); ?>">
							</a>
						</h1>
						</div>
					</li>
					<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				</ul>
			 	<section class="top-bar-section">
					<?php foundation_top_bar_l(); ?>

					<?php foundation_top_bar_r(); ?>
				</section>
			</nav>
		</div><!-- .top-bar-container -->
	</header><!-- #masthead -->