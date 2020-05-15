<!-- Start Slider Section -->
<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
   <div data-src="<?php echo $slider1imageurl ?>">
      <?php if($slider1caption) { ?>
      <div class="camera_caption moveFromBottom">
         <?php echo $slider1caption ?>
      </div>
      <?php } ?>
      <div class="moveFromBottom buttons">
         <?php if($joinnowbuttontext) { ?>
         <a class="btn" href="<?php echo $joinnowbuttonurl ?>"><?php echo $joinnowbuttontext ?></a>
         <?php } ?>
         <?php if($readmorebuttontext) { ?>
         <a class="btn blue" href="<?php echo $readmorebuttonurl ?>"><?php echo $readmorebuttontext ?></a>
         <?php } ?>
      </div>
   </div>
   <div data-src="<?php echo $slider2imageurl ?>">
      <?php if($slider2caption) { ?>
      <div class="camera_caption moveFromLeft">
         <?php echo $slider2caption ?>
      </div>
      <?php } ?>
      <div class="moveFromLeft buttons">
         <?php if($startcoursebuttontext) { ?>
         <a class="btn" href="<?php echo $startcoursebuttonurl ?>"><?php echo $startcoursebuttontext ?></a>
         <?php } ?>
         <?php if($taketourbuttontext) { ?>
         <a class="btn bor" href="<?php echo $taketourbuttonurl ?>"><?php echo $taketourbuttontext ?></a>
         <?php } ?>
      </div>
   </div>
   <div data-src="<?php echo $slider3imageurl ?>">
      <?php if($slider3caption) { ?>
      <div class="camera_caption moveFromBottom">
         <?php echo $slider3caption ?>
      </div>
      <?php } ?>
   </div>
   <div data-src="<?php echo $slider4imageurl ?>">
      <?php if($slider4caption) { ?>
      <div class="camera_caption moveFromRight">
         <?php echo $slider4caption ?>
      </div>
      <?php } ?>
      <?php if($slider4tagline) { ?>
      <div class="moveFromRight buttons">
         <p><?php echo $slider4tagline ?></p>
      </div>
      <?php } ?>
   </div>
   <div data-src="<?php echo $slider5imageurl ?>">
      <?php if($slider5caption) { ?>
      <div class="camera_caption moveFromBottom">
         <?php echo $slider5caption ?>
      </div>
      <?php } ?>
   </div>
   <div data-src="<?php echo $slider6imageurl ?>">
      <?php if($slider6caption) { ?>
      <div class="camera_caption moveFromLeft">
         <?php echo $slider6caption ?>
      </div>
      <?php } ?>
      <div class="moveFromLeft buttons">
         <?php if($slider6tagline) { ?>
         <p><?php echo $slider6tagline ?></p>
         <?php } ?>
         <?php if($slider6buttontext) { ?>
         <a class="btn" href="<?php echo $slider6buttonurl ?>"><?php echo $slider6buttontext ?></a>
         <?php } ?>
      </div>
   </div>
</div>
<!-- #camera_wrap_1 -->

<?php require_once(dirname(__FILE__).'/stickyicons.php'); ?>
<!-- End Slider Section -->
<?php require_once(dirname(__FILE__).'/blocks.php'); ?>
<div class="clearfix"></div>
