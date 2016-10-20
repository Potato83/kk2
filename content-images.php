<?php 
	if(has_post_thumbnail()){ ?>
	<div class="page-thum">
		
		<a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="lightbox">
	<?php
		echo the_post_thumbnail( 'full'); ?>
		<!-- <span class="clearfix caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span> -->
		<?php 
		
		echo '</a></div>';
	} else{
		echo '';
	}
?>

