<?php
/*
* Plugin Name: PCSD Collapse
* Plugin URI: https://github.com/Provo-City-School-District/pcsd-collapse
* Description: add a collapsible feature
* Author: Josh Espinoza
* Version: 1.0
* License: GPLv2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
 


Instructions.

control (click) element needs to have the class .collapseContol
the collapsing content needs to have the class .collapseContent


example:

<p class="collapsible">Open Collapsible</p>
<div class="colcontent">
  <p>Lorem ipsum...</p>
</div>

*/
function pcsd_collapse_assets()
{
    wp_register_script('collapse_js', plugin_dir_url(__FILE__) . '/pcsd-collapse.js', array(), '1.0', true);
    wp_enqueue_script('collapse_js');
    wp_enqueue_style('collapse_css', plugin_dir_url(__FILE__) . '/pcsd-collapse.css', '', '1.0', false);
}
add_action('wp_enqueue_scripts', 'pcsd_collapse_assets', 999);
