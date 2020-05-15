<?php
$THEME->name = 'trending';
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase','clean');
$THEME->sheets = array('custom','camera','font-awesome','owl','block_icon','colorfulTab','menu');
$THEME->yuicssmodules = array();
$THEME->enable_dock = false;
$THEME->editor_sheets = array();
$THEME->layouts = array(
// The site home page.
'frontpage' => array(
'file' => 'frontpage.php',
'regions' => array('side-pre','side-post'),
'defaultregion' => 'side-pre',
'options' => array('nonavbar'=>true, 'frontpage'=>true),
),
// Login page.
'login' => array(
'file' => 'login.php',
'regions' => array(),
'options' => array('langmenu'=>true),
),    
);
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_trending_process_css';
$THEME->javascripts_footer = array('owl.carousel','custom','menuNav');
$THEME->javascripts = array('jquery-3.1.0.min','camera.min','jquery.easing.min','colorfulTab.min','superfish.custom.min');