<!-- Start Sticky Icons Section --> 
<ul id="stickyicons">
   <li>
       <a href="<?php echo $callusurl ?>">
       <span class="stickynavicon" style="font-size:1.2em;"><i class="fa fa-phone" ></i></span>
           <?php if($callus) { ?>
           <span class="stickynavtext" style="right: -500px;"><?php echo $callus ?></span>
           <?php } ?>
       </a>
       
    </li>
   <li >
       <a href="<?php echo $emailusurl ?>">
           <span class="stickynavicon" style="font-size:1.2em;"><i class="fa fa-envelope" ></i></span>
           <?php if($emailus) { ?>
           <span class="stickynavtext" style="right: -500px;"><?php echo $emailus ?></span>
           <?php } ?>
       </a>
       
    </li>
   <li>
       <a href="<?php echo $livechaturl ?>">
           <span class="stickynavicon" style="font-size:1.2em;"><i class="fa fa-comments"></i></span>
           <?php if($livechat) { ?>
           <span class="stickynavtext" style="right: -500px;"><?php echo $livechat ?></span>
           <?php } ?>
       </a>
    </li>
</ul>
<!-- End Sticky Icons Section --> 