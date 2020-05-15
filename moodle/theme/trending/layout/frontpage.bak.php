<?php
   $regionmainbox = 'span12 desktop-first-column';
   $regionmain = 'span12 pull-right';
   $sidepre = 'span4 desktop-first-column';
   $sidepost = 'span3 pull-right';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/top-header.php'); ?>
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/slider.php'); ?>
   <!-- Start Category Section-->
   <?php global $PAGE,$theme;
      if (!empty($PAGE->theme->settings->enablecategoryimage)) { ?>
   <div class="customcategories row-fluid">
      <div class="container-fluid">
      </div>
   </div>
   <?php }else { ?>
   <div class="defaultcategories row-fluid">
      <div class="container-fluid">
      </div>
   </div>
   <?php } ?>
   <!-- End Category Section-->
   <!-- Start All Courses section -->    
   <div id="allcourses">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End All Courses section -->
   <!-- Start News section -->   
   <div id="news">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End News section -->
   <!-- Start Enrolled Courses section -->    
   <div id="enrolledcourses">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End Enrolled Courses section -->
   <!-- Start Marketing section -->
   <?php  if ($displaymarketingsection) { ?>
   <div class="awesome-start">
      <div class="container-fluid">
         <?php if($marketingheading) { ?>
         <h1><?php echo $marketingheading ?></h1>
         <?php } ?>
         <?php if($marketingbuttontext) { ?>
         <a href="<?php echo $marketingbuttonurl ?>" class="btn"><?php echo $marketingbuttontext ?></a>
         <?php } ?>
      </div>
   </div>
   <?php } ?>
   <!-- End Marketing section --> 
   <?php require_once(dirname(__FILE__).'/tutors.php'); ?>
   <?php require_once(dirname(__FILE__).'/customtab.php'); ?>
   <!-- Start Page Content Section -->  
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
            </div>
         </div>
      </div>
   </div>
   <!-- End Page Content Section -->
   <?php require_once(dirname(__FILE__).'/newsletter.php'); ?>  
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>
   <script type="text/javascript">
      /* Search Courses */
      jQuery(document).ready(function($) {
      
         if ($('#frontpage-category-combo').length === 0) {
             $('#page #page-content').css({
                 'display': 'none'
             });
         }
          
         if ($('#coursesearch').length === 0) {
             $('#page .newsearch').css({
                 'display': 'none'
             });
         }
          
           if ($('#frontpage-category-names').length === 0) {
             $('#page .defaultcategories').css({
                 'display': 'none'
             });
         }
          
          if ($('#frontpage-category-names').length === 0) {
             $('#page .customcategories').css({
                 'display': 'none'
             });
         }  
      
      });
   </script>