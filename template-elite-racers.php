<?php 
/*
Template Name: Elite Racers
*/
 ?>
 
<?php get_header(); ?>
<div class="row page-section">
<h1 class="title texture"><?php the_title(); ?></h1>
<p class="sub-header">We're excited to have some talented elite runners join us for the USATF trail half marathon championship! </p>
<div id="elite-racers" class="small-12 large-8 columns page-section" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>
	<?php endwhile; else: endif; ?>

	<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php the_content(); ?>
	<?php endwhile; else: endif; ?>
	
	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
