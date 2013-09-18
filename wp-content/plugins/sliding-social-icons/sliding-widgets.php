<?php 
/*
Plugin Name: Sliding Social Icons
Plugin URI: http://smartcatdesign.net
Description: Sliding Social Icons plugin that creates a social media bar on the left of your site dynamically, with smooth hover effects and links. 
Author: smartcat
Version: 1.4.4
Author URI: http://smartcatdesign.net
contact: info@ottawapc.ca
*/

 
include("libs/class.plugin.php");

$wpbs_plugindir = str_replace('\\','/',dirname(__FILE__));
$wpbs_plugin = new ahm_plugin(end(explode('/',$wpbs_plugindir)));
define('wpbs__DIR',$wpbs__plugindir); 

function wpbs_header(){
    $wssopt = get_option('wpbs_opt');
	if(false != $wssopt){
		extract($wssopt);
	}
    
	if(!$disable){
           
        ?>
    <style type="text/css">
    /********* common css for all box********/

    
    </style>
    
    <?php 
    if($position=='')$pos="left";else $pos=$position;
    include("tpls/".$pos."_css.php");
        
    }
    
}
function wpbs_sliders(){
    $wssopt = get_option('wpbs_opt');
	if(false != $wssopt){
		extract($wssopt);
	}
	if(!$disable){             
		if(empty($spos))$spos= 50;
		if(empty($icon_box_width))$icon_box_width= 100;
		if(empty($icon_box_height))$icon_box_height= 100;
		if($position=='')$pos="left";else $pos=$position;
		include("tpls/".$pos.".php");
    }
    
}

 
function wpbs_menu(){
    add_menu_page("Sliding Social Icons","Sliding Social Icons","administrator",'wpbs_panel','wpbs_settings',plugins_url('sliding-social-icons/images/icon.jpg'));
            
}
function wpbs_settings(){
    include("tpls/settings.php");
}
function wpbs_save_settings(){
    update_option('wpbs_opt',$_POST['wpbs__opt']);
    die('Options Updated');
}


function wpbs_scripts(){
    global $wpbs_plugin;
    //$scripts = array('jquery','jquery-form'); 
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-form');
    $wpbs_plugin->load_scripts(); 
    $wpbs_plugin->load_styles(); 
}
 
 
 if(is_admin()){
     add_action("admin_menu","wpbs_menu");
 }

$wpbs_plugin->load_modules(); 

add_action('wp_enqueue_scripts','wpbs_scripts');
add_action('admin_enqueue_scripts','wpbs_scripts');
add_action('wp_head','wpbs_header');
add_action('wp_footer','wpbs_sliders');
add_action('wp_ajax_wpbs_save_settings','wpbs_save_settings');

 