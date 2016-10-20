<?php 
/*
	Template Name: News
*/
?>
<?php get_header(); ?>
<!-- <div class="padder"></div> -->
<aside class="sneaky-aside">
&nbsp;
</aside>
<!-- <div class="sub-container-home"> -->
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 con-con">

	<?php // Display blog posts on any page @ http://m0n.co/l
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
	<hr>
	<?php endwhile; ?>

	<?php if ($paged > 1) { ?>

	<nav id="nav-posts">
		<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
	</nav>

	<?php } else { ?>

	<nav id="nav-posts">
		<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
	</nav>

	<?php } ?>

	<?php wp_reset_postdata(); ?>

</div>
</div>
<?php get_footer(); ?>