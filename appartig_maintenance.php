<?php
	
	/*
		Plugin Name: AppArtig Maintenance
		Description: Simple Maintenance Page for not logged in Users
		Version:     1.1.0
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

	function aamt_show_maintenance_page()
	{
		$aamt_title = get_bloginfo('name');
		$aamt_URL =  plugin_dir_url(__FILE__);
		
		require_once('template.html');
		
		die();
	}

	function aamt_check_show_maintenance_page()
	{
		if (in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')))
			return;
		
		if (is_user_logged_in())
			return;

		aamt_show_maintenance_page();
	}

	add_action('get_header', 'aamt_check_show_maintenance_page');

?>