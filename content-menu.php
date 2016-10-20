<!-- NAVBAR
    ================================================== -->
    
  <div class="navbar-wrapper">

    <nav class="navbar" role="navigation"> 

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>               
             
      </div>
    <a class="big-head" href="<?php echo esc_url( home_url( '/' ) ); ?>">KATHY KENNEDY</a>
        	   
            <?php
              wp_nav_menu( array(
                
                'theme_location'  => 'primary',                
                'container'     => 'div',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'    => 'nav navbar-nav'                
              ) );
            ?>
       
    </nav><!-- navbar -->
  </div>
  
  <div class="clearfix menu"></div>