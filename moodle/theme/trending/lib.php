<?php
function theme_trending_process_css($css, $theme) {
global $OUTPUT;
// Set the background image for the logo.
$logo = $OUTPUT->get_logo_url(null, 75);
$css = theme_trending_set_logo($css, $logo);
// Set custom CSS.
if (!empty($theme->settings->customcss)) {
$customcss = $theme->settings->customcss;
} else {
$customcss = null;
}
$css = theme_trending_set_customcss($css, $customcss);
// Set the background image for the allcoursesbg.
$allcoursesbg = $theme->setting_file_url('allcoursesbg', 'allcoursesbg');
if(!isset($allcoursesbg)){
$allcoursesbg = $OUTPUT->image_url('popular-course-bg', 'theme');
}
$css = theme_trending_set_allcoursesbg($css, $allcoursesbg);
// Set the background image for the enrolledcoursesbg.
$enrolledcoursesbg = $theme->setting_file_url('enrolledcoursesbg', 'enrolledcoursesbg');
if(!isset($enrolledcoursesbg)){
$enrolledcoursesbg = $OUTPUT->image_url('enrolledcourses-bg', 'theme');
}
$css = theme_trending_set_enrolledcoursesbg($css, $enrolledcoursesbg); 
// Set the background image for the tutorsbg.
$tutorsbg = $theme->setting_file_url('tutorsbg', 'tutorsbg');
if(!isset($tutorsbg)){
$tutorsbg = $OUTPUT->image_url('tutors-bg', 'theme');
}
$css = theme_trending_set_tutorsbg($css, $tutorsbg);
// Set the background image for the loginbackground.
$loginbackground = $theme->setting_file_url('loginbackground', 'loginbackground');
if(!isset($loginbackground)){
$loginbackground = $OUTPUT->image_url('loginbackground', 'theme');
}
$css = theme_trending_set_loginbackground($css, $loginbackground); 
// Set the student1image.
$student1image = $theme->setting_file_url('student1image', 'student1image');
if(!isset($student1image)){
$student1image = $OUTPUT->image_url('students/01', 'theme');
}
$css = theme_trending_set_student1image($css, $student1image);
// Set the student2image.
$student2image = $theme->setting_file_url('student2image', 'student2image');
if(!isset($student2image)){
$student2image = $OUTPUT->image_url('students/02', 'theme');
}
$css = theme_trending_set_student2image($css, $student2image);
// Set the student3image.
$student3image = $theme->setting_file_url('student3image', 'student3image');
if(!isset($student3image)){
$student3image = $OUTPUT->image_url('students/03', 'theme');
}
$css = theme_trending_set_student3image($css, $student3image);
// Set the student4image.
$student4image = $theme->setting_file_url('student4image', 'student4image');
if(!isset($student4image)){
$student4image = $OUTPUT->image_url('students/04', 'theme');
}
$css = theme_trending_set_student4image($css, $student4image);
// Set the student5image.
$student5image = $theme->setting_file_url('student5image', 'student5image');
if(!isset($student5image)){
$student5image = $OUTPUT->image_url('students/05', 'theme');
}
$css = theme_trending_set_student5image($css, $student5image);
// Set the internalbannerimage.
$internalbannerimage = $theme->setting_file_url('internalbannerimage', 'internalbannerimage');
if(!isset($internalbannerimage)){
$internalbannerimage = $OUTPUT->image_url('internalbanner', 'theme');
}
$css = theme_trending_set_internalbannerimage($css, $internalbannerimage);
// Set the sitebluecolor.
if (empty($theme->settings->sitebluecolor)) {
$sitebluecolor = '#0482D2'; // Default.
} else {
$sitebluecolor = $theme->settings->sitebluecolor;
}
$css = trending_set_sitebluecolor($css, $sitebluecolor);
// Set the siteyellowcolor.
if (empty($theme->settings->siteyellowcolor)) {
$siteyellowcolor = '#ffaa30'; // Default.
} else {
$siteyellowcolor = $theme->settings->siteyellowcolor;
}
$css = trending_set_siteyellowcolor($css, $siteyellowcolor);
// Set the sitevioletcolor.
if (empty($theme->settings->sitevioletcolor)) {
$sitevioletcolor = '#3c4e8e'; // Default.
} else {
$sitevioletcolor = $theme->settings->sitevioletcolor;
}
$css = trending_set_sitevioletcolor($css, $sitevioletcolor);
return $css;
}
/**
* Adds the logo to CSS.
*
* @param string $css The CSS.
* @param string $logo The URL of the logo.
* @return string The parsed CSS
*/
function theme_trending_set_logo($css, $logo) {
$tag = '[[setting:logo]]';
$replacement = $logo;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_allcoursesbg($css, $allcoursesbg) {
$tag = '[[setting:allcoursesbg]]';
$replacement = $allcoursesbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_enrolledcoursesbg($css, $enrolledcoursesbg) {
$tag = '[[setting:enrolledcoursesbg]]';
$replacement = $enrolledcoursesbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_tutorsbg($css, $tutorsbg) {
$tag = '[[setting:tutorsbg]]';
$replacement = $tutorsbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_loginbackground($css, $loginbackground) {
$tag = '[[setting:loginbackground]]';
$replacement = $loginbackground;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_student1image($css, $student1image) {
$tag = '[[setting:student1image]]';
$replacement = $student1image;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_student2image($css, $student2image) {
$tag = '[[setting:student2image]]';
$replacement = $student2image;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_student3image($css, $student3image) {
$tag = '[[setting:student3image]]';
$replacement = $student3image;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_student4image($css, $student4image) {
$tag = '[[setting:student4image]]';
$replacement = $student4image;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_student5image($css, $student5image) {
$tag = '[[setting:student5image]]';
$replacement = $student5image;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_trending_set_internalbannerimage($css, $internalbannerimage) {
$tag = '[[setting:internalbannerimage]]';
$replacement = $internalbannerimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function trending_set_sitebluecolor($css, $sitebluecolor) {
$tag = '[[setting:sitebluecolor]]';
$css = str_replace($tag, $sitebluecolor, $css);
return $css;
}
function trending_set_siteyellowcolor($css, $siteyellowcolor) {
$tag = '[[setting:siteyellowcolor]]';
$css = str_replace($tag, $siteyellowcolor, $css);
return $css;
}
function trending_set_sitevioletcolor($css, $sitevioletcolor) {
$tag = '[[setting:sitevioletcolor]]';
$css = str_replace($tag, $sitevioletcolor, $css);
return $css;
}
/**
* Serves any files associated with the theme settings.
*
* @param stdClass $course
* @param stdClass $cm
* @param context $context
* @param string $filearea
* @param array $args
* @param bool $forcedownload
* @param array $options
* @return bool
*/
require_once($CFG->libdir.'/coursecatlib.php');
function theme_trending_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
$coursecats = coursecat::make_categories_list();
foreach ($coursecats as $key => $value) {
if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'categoryimage'.$key) {
$theme = theme_config::load('trending');
return $theme->setting_file_serve('categoryimage'.$key, $args, $forcedownload, $options);
}
}
if ($context->contextlevel == CONTEXT_SYSTEM and ($filearea === 'logo' || $filearea === 'smalllogo'|| $filearea === 'defaultcategoryimage' || $filearea === 'allcoursesbg' || $filearea === 'enrolledcoursesbg' || $filearea === 'tutorsbg' || $filearea === 'loginbackground' || $filearea === 'tutor1image' || $filearea === 'tutor2image' || $filearea === 'tutor3image' || $filearea === 'tutor4image' || $filearea === 'tutor5image' || $filearea === 'tutor6image' || $filearea === 'tutor7image' || $filearea === 'tutor8image' || $filearea === 'tutor9image' || $filearea === 'student1image' || $filearea === 'student2image' || $filearea === 'student3image' || $filearea === 'student4image' || $filearea === 'student5image' || $filearea === 'footerlogo' || $filearea === 'internalbannerimage' || $filearea === 'favicon')){
$theme = theme_config::load('trending');
// By default, theme files must be cache-able by both browsers and proxies.
if (!array_key_exists('cacheability', $options)) {
$options['cacheability'] = 'public';
}
return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
} else {
send_file_not_found();
}
}
/**
* Adds any custom CSS to the CSS before it is cached.
*
* @param string $css The original CSS.
* @param string $customcss The custom CSS to add.
* @return string The CSS which now contains our custom CSS.
*/
function theme_trending_set_customcss($css, $customcss) {
$tag = '[[setting:customcss]]';
$replacement = $customcss;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
/**
* Returns an object containing HTML for the areas affected by settings.
*
* Do not add trending specific logic in here, child themes should be able to
* rely on that function just by declaring settings with similar names.
*
* @param renderer_base $output Pass in $OUTPUT.
* @param moodle_page $page Pass in $PAGE.
* @return stdClass An object with the following properties:
*      - navbarclass A CSS class to use on the navbar. By default ''.
*      - heading HTML to use for the heading. A logo if one is selected or the default heading.
*      - footnote HTML to use as a footnote. By default ''.
*/
function theme_trending_get_html_for_settings(renderer_base $output, moodle_page $page) {
global $CFG;
$return = new stdClass;
$return->navbarclass = '';
if (!empty($page->theme->settings->invert)) {
$return->navbarclass .= ' navbar-inverse';
}
// Only display the logo on the front page and login page, if one is defined.
if (!empty($page->theme->settings->logo) &&
($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
$return->heading = html_writer::tag('div', '', array('class' => 'logo'));
} else {
$return->heading = $output->page_heading();
}
$return->footnote = '';
if (!empty($page->theme->settings->footnote)) {
$return->footnote = '
<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>
';
}
return $return;
}
/**
* All theme functions should start with theme_trending_
* @deprecated since 2.5.1
*/
function trending_process_css() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_trending_
* @deprecated since 2.5.1
*/
function trending_set_logo() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_trending_
* @deprecated since 2.5.1
*/
function trending_set_customcss() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/* Multilanguage
--------------------- */
function theme_trending_get_setting($setting, $format = false) {
global $CFG;
require_once($CFG->dirroot . '/lib/weblib.php');
static $theme;
if (empty($theme)) {
$theme = theme_config::load('trending');
}
if (empty($theme->settings->$setting)) {
return false;
} else if (!$format) {
return $theme->settings->$setting;
} else if ($format === 'format_text') {
return format_text($theme->settings->$setting, FORMAT_PLAIN);
} else if ($format === 'format_html') {
return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
} else {
return format_string($theme->settings->$setting);
}
}