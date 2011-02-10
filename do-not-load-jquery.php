<?php
/*
 Info for WordPress:
 ==============================================================================
 Plugin Name: Do Not Load jQuery
 Plugin URI: http://www.websitedesignernc.com/do-not-load-jquery/
 Description: This plugin will stop Wordpress plugins from inserting jQuery into your code. This way you can insert jQuery from another source such as Google into the header and not have to load the javascript library more than once.
 Version: 1.0
 Author: Johnathan Smith
 Author URI: http://www.websitedesignernc.com/
	*/


function remove_jquery(){  
	wp_deregister_script('jquery');
}

add_action('wp_head', 'remove_jquery', 0);
?>