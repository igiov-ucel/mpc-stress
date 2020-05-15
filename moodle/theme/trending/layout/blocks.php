<?php if(isloggedin()){?>

<!-- Start Block Section -->
<div class="block-section">
   <input type="checkbox" id="navigation1" />
   <label for="navigation1" class="slideblocklabel"><i class="fa fa-cogs fa-spin"></i></label>
   <nav class="slideblock">
      <div class="slideblock-con">
         <?php if($blockcustombutton) { ?>
         <a class="link-buy" href="<?php echo $blockcustombuttonurl ?>" title="<?php echo $blockcustombutton ?>"><i class="fa fa-shopping-cart"></i><?php echo $blockcustombutton ?></a>
         <?php } ?>
         <h4 class="links"><?php echo $blockheading ?></h4>
         <p class="links-con"><?php echo $blocktagline ?></p>
         <hr/>
      </div>
      <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
      <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
   </nav>
</div>
<!-- End Block Section -->
 <?php }?>
