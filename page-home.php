<?php
/*
Template Name: Home Page 
 */
get_header(); ?>
<div class="home-con">
<div class="row">
	
	<!-- <div class="col-md-6 right">


		<?php 
	if(has_post_thumbnail()){ ?>
	<div id="homepage">
		
		
	<?php
		echo the_post_thumbnail( 'full');
		echo '</div>';
	} else{
		echo '';
	}
?>


</div> -->
	<div class="col-md-12 homer">
<p class="lead">Kathy Kennedy is a sound artist working with various technologies and the voice. She has also worked extensively in the digital domain and in community art with feminist practise, as well as in music of many styles.</p>
	</div>
	</div>
	<div class="homie">
	<div class="row">	
	<div class="col-md-8 col-md-offset-2 center right">
<h4>Professional services:</h4>
		<ul class="ul-home">
			<li>Soundtracks/scores for radio, film, TV and dance</li>
			<li>Installations, radio documentaries</li>
			<li>Live performance</li>
			<li>Choral direction and composition, vocal arrangement</li>
			<li>Workshops and private lessons in voice</li>
		</ul>
<hr>

</div>
</div>
</div>
</div>
</div>
<!-- <div class="home-lo"> -->
<footer class="homefoot">
<p class="center">
	<a href="http://www.facebook.com/kathy.kennedy.123276" class="badge social facebook" target="_blank">
		<i class="fa fa-facebook"></i>
	</a>
</p> 
<p class="center">Subscribe to my newsletter</p>
<p class="center">
<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
</p>	
</footer>
	<!-- </div> -->

<?php get_footer(); ?>
<script>
	var HereNow = '<?php echo get_page_template_slug( $post_id ); ?>';
	if(HereNow == 'page-home.php'){
		console.log('timmy');
		$('body, html').addClass('tast');
		$('p, h2, li, h1, a, h3').addClass('plaz');
	}else{
		console.log(HereNow);
	}
</script>