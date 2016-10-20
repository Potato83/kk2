<!-- <h1 class="big-head">Kathy Kennedy</h1>  -->
<div class="row">
	
	
	<div class="col-md-6 right">


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


</div>
	<div class="col-md-6 homer">
<p class="lead">Kathy Kennedy is a sound artist working with various technologies and the voice. She has also worked extensively in the digital domain and in community art with feminist practise, as well as in music of many styles.</p>
		

<h3>Professional services:</h3>
		<ul class="ul-home">
			<li>Soundtracks/scores for radio, film, TV and dance</li>
			<li>Installations, radio documentaries</li>
			<li>Live performance</li>
			<li>Choral direction and composition, vocal arrangement</li>
			<li>Workshops and private lessons in voice</li>
		</ul>


<hr>
		<p><a href="http://www.facebook.com/kathy.kennedy.123276" target="_blank">Visit my Facebook page</a></p>

<p>Subscribe to my newsletter
<p>
<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
</p>	
	</div>

</div>

