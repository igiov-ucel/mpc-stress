<!-- Start Newsletter Section -->
<?php  if ($displaynewslettersection) { ?>
<div class="newsletter">
   <div class="container-fluid">
      <?php if($newsletterheading) { ?>
      <h5><?php echo $newsletterheading ?></h5>
      <?php }?>
      <?php if($newslettertagline) { ?>
      <p><?php echo $newslettertagline ?></p>
      <?php } ?>
      <form method="post" action="http://trending.demo.themescustom.com" onsubmit="return newsletter_check(this)">
         <div class="newsletter-field-email">
            <label>Email</label>
            <input class="newsletter-email" type="email" name="ne" required="">
         </div>
         <div class="newsletter-field-button">
            <input class="newsletter-submit" type="submit" value="Subscribe">
         </div>
      </form>
   </div>
</div>
<?php } ?>
<!-- End Newsletter Section -->