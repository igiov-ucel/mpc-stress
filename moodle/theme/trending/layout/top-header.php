<!-- Start Top Header Section -->
<div class="top-header">
   <div class="container-fluid">
      <div class="pull-left customsearch">
         <span class="newsearch">
            <a href="<?php echo $CFG->wwwroot;?>/course/" class="catalog">Catálogo</a>
            <form role="form" class="form-inline searchbox" id="searchbox_demo" method="get" action="<?php echo $CFG->wwwroot;?>/course/search.php" >
               <div class="input-group search">
                  <input type="text" placeholder="Buscar cursos" value="" name="search">
                  <input type="submit" name="sa" value="" class="submit" />
               </div>
               <div class="clearfix"></div>
            </form>
         </span>
      </div>
      <div class="loginsection pull-right">
         <?php if(isloggedin()){
            if(isguestuser()){
            ?>
         <div class="line">
            <a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
            <?php echo get_string('login') ?>
            </a>
         </div>
         <?php
            }else{
            ?>
         <div class="line usermenu-con">
            <?php echo $OUTPUT->user_menu(); ?>
         </div>
         <?php
            }
            }else{ ?>	
         <?php
            if(!empty($CFG->registerauth)){
            	 $authplugin = get_auth_plugin($CFG->registerauth);
            	 if($authplugin->can_signup()){
            		
            		?>
         <div class="line">
            <a class="signup" href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Register</a>
         </div>
         <?php
            }
            }
            ?>
         <div class="line">
            <a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
            <?php echo get_string('login') ?>
            </a>
         </div>
         <?php
            }
            ?>
      </div>
      <!-- end div .loginsection -->
   </div>
</div>
<!-- End Top Header Section -->
