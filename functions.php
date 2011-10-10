<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Theme Tester',
    		'id'   => 'theme-tester',
    		'description'   => 'This is to load NKThemeSwitcher to test themes.',
			'before_widget' => '',
			'after_widget' => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }

	// Load Hold Me theme options
	include('functions/hm_theme_options.php');

        //MailChimp Functions
        function get_api_key() {
            $apikey = get_option('hm_brand_mcapikey');
            return $apikey;
        }

        function get_list_id() {
            $listid = get_option('hm_brand_mclistid');
            return $listid;
        }
?>