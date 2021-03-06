<?php
/*
Template Name: Orphan Children 
 */
get_header(); ?>
<button type="button" class="pull-left navbar-toggle visible-xs" id="sidebar-toggle-orph" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<div class="padder"></div>
<!-- <div class="padder"></div> -->

<!-- <h1>this is the grand children template aka page-bottom.php</h1> -->


<!-- <h3>Grand Children</h3> -->

<div class="row">
  <div class="col-sm-2">
<aside class="sidebar-offcanvas aside-orph">
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
<div class="col-sm-10 con-con con-orph">
<?php wp_reset_postdata(); ?>
<?php get_template_part('content', 'images'); ?>
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>
</div>



<?php get_footer(); ?>