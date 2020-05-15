<!-- Start Logo and Custom Menu Section -->  
<div class="fixed-nav-element"></div>
<div id="nav-main">
<header role="banner" class="navbar <?php echo $html->navbarclass ?> moodle-has-zindex">
    
   <nav role="navigation" class="navbar-inner">
      <div class="container-fluid">
         <div class="pull-left logo-con">
            <a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>" alt="" /> </a>
         </div>
           
         <div class="pull-right custom-menu">
             
            <?php echo $OUTPUT->navbar_home(); ?>
            <?php echo $OUTPUT->navbar_button(); ?>
            <?php echo $OUTPUT->navbar_plugin_output(); ?>
            <?php echo $OUTPUT->search_box(); ?>
            
        <div id="navigation-wrapper">
            <div class="main-navigation-inner">
                <div class="container-fluid">
                    <div class="row">
                    <div class="menu-bar">
                         <a class="mobile-home" href="" title="Trending">
                          <i class="fa fa-home"></i>
                         </a>
                         <a class="show-menu" href="#"><i class="fa fa-bars"></i>
                         </a>
                    </div>
                       <?php echo $OUTPUT->custom_menu(); ?>
                       <ul class="nav pull-right">
                          <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                       </ul> 
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

</div>
       
</div>
</nav>
</header>
</div>
<!-- End Logo and Custom Menu Section -->