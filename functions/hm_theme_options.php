<?php

class Hold_Me_Theme {
	
	function hm_Init() {
		add_settings_section('hm_branding_section',
			'Branding and Social Media',
			array('Hold_Me_Theme', 'hm_Branding_Header'),
			'hm_theme_options_page');

		register_setting('hm_theme_options',
			'hm_brand_logo',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_logo_id',
			'Brand Logo URL',
			array('Hold_Me_Theme', 'hm_Brand_Logo'),
			'hm_theme_options_page',
			'hm_branding_section');
			
		register_setting('hm_theme_options',
			'hm_brand_twitter',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_twitter_id',
			'Twitter URL',
			array('Hold_Me_Theme', 'hm_Brand_Twitter'),
			'hm_theme_options_page',
			'hm_branding_section');
			
		register_setting('hm_theme_options',
			'hm_brand_facebook',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_facebook_id',
			'Facebook Page URL',
			array('Hold_Me_Theme', 'hm_Brand_Facebook'),
			'hm_theme_options_page',
			'hm_branding_section');

		add_settings_section('hm_tracking_section',
			'MailChimp and Analytics',
			array('Hold_Me_Theme', 'hm_Tracking_Header'),
			'hm_theme_options_page');

                register_setting('hm_theme_options',
			'hm_brand_mcapikey',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_mcapikey_id',
			'MailChimp API Key',
			array('Hold_Me_Theme', 'hm_Brand_MCAPIKey'),
			'hm_theme_options_page',
			'hm_tracking_section');

                register_setting('hm_theme_options',
			'hm_brand_mclistid',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_mclistid_id',
			'MailChimp List ID',
			array('Hold_Me_Theme', 'hm_Brand_MCListID'),
			'hm_theme_options_page',
			'hm_tracking_section');
			
		register_setting('hm_theme_options',
			'hm_brand_analytics',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_brand_analytics_id',
			'Google Analytics Code',
			array('Hold_Me_Theme', 'hm_Brand_Analytics'),
			'hm_theme_options_page',
			'hm_tracking_section');

		add_settings_section('hm_coming_soon_section',
			'Coming Soon Message',
			array('Hold_Me_Theme', 'hm_Coming_Soon_Header'),
			'hm_theme_options_page');

		register_setting('hm_theme_options',
			'hm_coming_soon_label',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_coming_soon_label_id',
			'Coming Soon Label',
			array('Hold_Me_Theme', 'hm_Coming_Soon_Label'),
			'hm_theme_options_page',
			'hm_coming_soon_section');

		register_setting('hm_theme_options',
			'hm_coming_soon_message',
			array('Hold_Me_Theme', 'hm_Validator'));

		add_settings_field('hm_coming_soon_message_id',
			'Coming Soon Message',
			array('Hold_Me_Theme', 'hm_Coming_Soon_Message'),
			'hm_theme_options_page',
			'hm_coming_soon_section');
	}
	
	function hm_Branding_Header() {
		?>
			<p>Enter the URLs to your logo, Twitter, and Facebook page.</p>
		<?php
	}
	
	function hm_Brand_Logo() {
		$hm_brand_logo = get_option('hm_brand_logo');
		?>
			<input type="url" size="50" id="hm_brand_logo_id" name="hm_brand_logo" value="<?php echo $hm_brand_logo; ?>" placeholder="URL to your logo/image" />
			<p>Preview:</p>
			<img src="<?php echo $hm_brand_logo; ?>" width="300px" />
		<?php
	}
	
	function hm_Brand_Twitter() {
		$hm_brand_twitter = get_option('hm_brand_twitter');
		?>
			<input type="url" size="50" id="hm_brand_twitter_id" name="hm_brand_twitter" value="<?php echo $hm_brand_twitter; ?>" placeholder="http://twitter.com/#!/_twitter_handle_" />
		<?php
	}
	
	function hm_Brand_Facebook() {
		$hm_brand_facebook = get_option('hm_brand_facebook');
		?>
			<input type="url" size="50" id="hm_brand_facebook_id" name="hm_brand_facebook" value="<?php echo $hm_brand_facebook; ?>" placeholder="http://facebook.com/_facebook_profile_" />
		<?php
	}

	function hm_Tracking_Header() {
		?>
			<p>Enter your MailChimp and Google Analytics info.</p>
		<?php
	}

        function hm_Brand_MCAPIKey() {
		$hm_brand_mcapikey = get_option('hm_brand_mcapikey');
		?>
			<input type="text" size="50" id="hm_brand_mcapikey_id" name="hm_brand_mcapikey" value="<?php echo $hm_brand_mcapikey; ?>" placeholder="Your MailChimp API Key" /><p>Find your MailChimp API Key by browsing to <a href="http://admin.mailchimp.com/account/api" title="Get your API Key" target="_BLANK">http://admin.mailchimp.com/account/api</a></p>
		<?php
	}

        function hm_Brand_MCListID() {
		$hm_brand_mclistid = get_option('hm_brand_mclistid');
		?>
			<input type="text" size="50" id="hm_brand_mclistid_id" name="hm_brand_mclistid" value="<?php echo $hm_brand_mclistid; ?>" placeholder="Your MailChimp List ID" /><p>Your MailChimp List ID can be found by browsing to <a href="https://admin.mailchimp.com/lists/" title="Get your List ID" target="_BLANK">https://admin.mailchimp.com/lists/</a>, clicking Settings, then selecting List Settings and Unique ID. It is found at the bottom of that page.</p>
		<?php
	}

	function hm_Brand_Analytics() {
		$hm_brand_analytics = get_option('hm_brand_analytics');
		?>
			<textarea id="hm_brand_analytics_id" name="hm_brand_analytics" rows="10" cols="100"><?php echo $hm_brand_analytics; ?></textarea>
		<?php
	}

	function hm_Coming_Soon_Header() {
		?>
			<p>Enter a Title and a Coming Soon Message for your visitors.</p>
		<?php
	}

	function hm_Coming_Soon_Label() {
		$hm_coming_soon_label = get_option('hm_coming_soon_label');
		?>
			<input type="text" size="50" id="hm_coming_soon_label_id" name="hm_coming_soon_label" value="<?php echo $hm_coming_soon_label; ?>" placeholder="Our site is coming soon!" />
		<?php
	}
	
	function hm_Coming_Soon_Message() {
		$hm_coming_soon_message = get_option('hm_coming_soon_message');
		?>
			<textarea id="hm_coming_soon_message_id" name="hm_coming_soon_message" rows="10" cols="100"><?php echo $hm_coming_soon_message; ?></textarea>
		<?php
	}
	
	function hm_Validator($input) {
		//$input['text_string'] =  wp_filter_nohtml_kses($input['text_string']);	
		return $input;
	}
	
	function hm_Theme_Menu() {
		if (!function_exists('current_user_can')
			||
			!current_user_can('manage_options'))
				return;
		
		if (function_exists('add_theme_page'))
			add_theme_page('Hold Me Options',
				'Hold Me Options',
				'manage_options',
				'hm_theme_options_page',
				array('Hold_Me_Theme', 'hm_Display_Page'));
	}
	
	function hm_Display_Page() {
		?>
			<div class="wrap">
				<?php screen_icon('options-general'); ?>
				<h2>Hold Me Theme Options</h2>
				<form action="options.php" method="post">
					<?php settings_fields('hm_theme_options'); ?>
					<?php do_settings_sections('hm_theme_options_page'); ?>
					<p class="submit">
						<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
					</p>
				</form>
			</div>
		<?php
	}
}

add_action('admin_init',
	array('Hold_Me_Theme', 'hm_Init'));

add_action('admin_menu',
	array('Hold_Me_Theme', 'hm_Theme_Menu'));
?>