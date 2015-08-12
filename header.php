<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fonts.css' rel='stylesheet' type='text/css'>

		<!-- ScrollTo + LocalScroll -->
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.localScroll.min.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js'></script>

		<?php wp_head(); ?>

		<script type="text/javascript">// <![CDATA[
		    // When the document is loaded...
		    $(document).ready(function()
		    {
		        // Scroll the whole document
		        $('#main-nav').localScroll({
		           target:'body',
		           offset: -180
		        });
		 
		    });
		 
		// ]]></script>

	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="row" role="banner">
  <div class="large-12 columns">
    <div id="main-branding" class="large-3 columns drop">
      <div id="main-padden-logo" class="drop">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lake-padden-trail-half-logo.png" title="<?php echo bloginfo('description'); ?> "></a>
      </div>
      <div id="main-rebound-logo" class="drop">
        <h3>Benefitting</h3> 
        <p>a great local non-profit:</p>
        <a href="http://www.reboundwc.org" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rebound-logo.png" title="The Lake Padden Trail Half supports the local Bellingham non-profit Rebound of Whatcom County. Find out more about them!"></a>
      </div>
      <div class="facebook-link drop texture-light">
        <a href="https://www.facebook.com/pages/Lake-Padden-Half-Marathon/206834429336434" target="_blank" title="Connect with us on Facebook to see the latest race updates!">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.png">
        </a>
      </div>
    </div>
    <div id="race-intro" class="large-9 columns hide-for-small-only">
      <div id="race-intro-text" class="texture-light drop">
        <p>The <em>Lake Padden Trail Half</em> is now home of the</p>
        <h1>USATF trail half national championship!</h1>
      </div>
    </div>
  </div>
</header>
<div id="main-nav" class="contain-to-grid sticky show-for-large-up" data-magellan-expedition="fixed">
  <nav class="top-bar" data-topbar>
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li id="nav-register" class="has-form">
          <a href="https://ultrasignup.com/register.aspx?did=27603" class="alert button drop texture-light" target="_blank">Register Now!</a>
        </li>
      </ul>

      <!-- Left Nav Section -->
      <ul class="left" >
        <li data-magellan-arrival="home"><a href="<?php echo get_home_url(); ?>/">Home</a></li>
        <li data-magellan-arrival="race-info" class="has-dropdown">
          <a href="<?php echo get_home_url(); ?>/#race-info">Race Info</a>
          <ul class="dropdown">
            <li><a href="<?php echo get_home_url(); ?>/#USATF">USATF Championship</a></li>
            <li><a href="<?php echo get_home_url(); ?>/#race-details">Race Details</a></li>
            <li><a href="<?php echo get_home_url(); ?>/#race-map">Race Map</a></li>
            <li><a href="<?php echo get_home_url(); ?>/#race-schedule">Race Schedule</a></li>            
            <li><a href="<?php echo get_home_url(); ?>/#post-race">Post Race Party</a></li>
            <li><a href="<?php echo get_home_url(); ?>/#getting-here">Getting Here</a></li>
          </ul>
        </li>
        <li data-magellan-arrival="sponsors"><a href="<?php echo get_home_url(); ?>/#sponsors">Sponsors</a></li>
        <li class="has-dropdown">
          <a href="<?php echo get_home_url(); ?>/race-news/">Race News</a>
           <ul class="dropdown">
            <li><a href="<?php echo get_home_url(); ?>/elite-racers/">Elite Racers</a></li>
            </ul>
        </li>
        <li data-magellan-arrival="volunteer"><a href="<?php echo get_home_url(); ?>/#volunteer">Volunteer</a></li>
        <li data-magellan-arrival="contact"><a href="<?php echo get_home_url(); ?>/#contact">Contact</a></li>
      </ul>
    </section>
  </nav>
</div>
	
<!-- 	<nav class="tab-bar">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
			<h1 class="title">
				<?php bloginfo( 'name' ); ?>
			</h1>

		</section>
	</nav>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?> -->

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
