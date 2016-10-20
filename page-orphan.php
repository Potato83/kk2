<?php
/*
Template Name: Orphan Children 
 */
get_header(); ?>
<div class="padder"></div>
<!-- <div class="padder"></div> -->

<!-- <h1>this is the grand children template aka page-bottom.php</h1> -->


<!-- <h3>Grand Children</h3> -->
<button type="button" class="pull-left btn btn-default visible-xs" id="sidebar-toggle" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
  <i class="fa fa-navicon"></i>
</button>
<div class="row">
  <div class="col-md-2">
<aside class="sidebar-offcanvas">
<?php
        
    $parent = $post->post_parent;

    $siblings =  get_pages('child_of='.$parent);

    

    
        $args = array(
             'depth' => 1,
             'title_li' => '',
             //'exclude' => $post->ID,
             'child_of' => $parent,
             'sort_column' => 'menu_order',
           );
    
    //Show pages if this page has more than one sibling 
    // and if it has children 
    if(count($siblings) > 1 && !is_null($args))   
    {?>
    <div class="widget subpages">
    
         <ul class="bottom-cat">
         <?php wp_list_pages($args);  ?>
         </ul>
     </div>
    <?php } ?>
</aside>
</div>
<div class="col-md-10 con-con">
<?php wp_reset_postdata(); ?>
<?php get_template_part('content', 'images'); ?>
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>
</div>



<?php get_footer(); ?>