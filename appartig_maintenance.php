<?php
	
	/*
		Plugin Name: AppArtig Maintenance
		Description: Simple Maintenance Page for not logged in Users
		Version:     1.0.1
		Author:      AppArtig e.U.
		Author URI:  https://www.appartig.at
		License:     APPARTIG/AGB
		License URI: https://www.appartig.at/agb
		Text Domain: aamt
	*/

	/******************************************************
	** Main
	******************************************************/

	defined('ABSPATH') || exit('');
	
	function aamt_is_valid_page() {
		return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
	}

	if(!is_admin() && !aamt_is_valid_page()){  
		
		$aamt_title = get_bloginfo('name');
		$aamt_URL =  plugin_dir_url(__FILE__);
		
		require_once('template.html');
		
		die();
	} 

?>