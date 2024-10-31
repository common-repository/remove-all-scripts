<?php
/*
Plugin Name: Remove All Scripts
Plugin URI: http://www.svachon.com/
Description: Remove all enqueued scripts from every post/page/etc on your WordPress site.
Version: 0.1
Author: Steven Vachon
Author URI: http://www.svachon.com/
Author Email: contact@svachon.com
*/

function remove_all_scripts()
{
	global $wp_scripts;
	
	$wp_scripts->registered = array();
	$wp_scripts->queue = array();
	$wp_scripts->to_do = array();
	$wp_scripts->done = array();
	$wp_scripts->args = array();
	$wp_scripts->groups = array();
}



// Prevents errors when this file is accessed directly
if (function_exists('is_admin'))
{
	if (!is_admin())
	{
		add_action('get_header', 'remove_all_scripts');
	}
}



?>