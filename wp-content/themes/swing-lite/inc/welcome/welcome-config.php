<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'siteorigin-panels' => array(
					'slug' => 'siteorigin-panels',
					'filename' => 'siteorigin-panels.php',
					'class' => 'SiteOrigin_Panels'
				),

				'contact-form-7' => array(
					'slug' => 'contact-form-7',
					'filename' => 'wp-contact-form-7.php',
					'class' => 'WPCF7'
				),

				'so-widgets-bundle' => array(
					'slug' => 'so-widgets-bundle',
					'filename' => 'so-widgets-bundle.php',
					'class' => 'SiteOrigin_Widgets_Bundle'
				),

				'wp-hotel-booking' => array(
					'slug' => 'wp-hotel-booking',
					'filename' => 'wp-hotel-booking.php',
					'class' => 'WP_Hotel_Booking'
				),

			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'swing-lite'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'swing-lite'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
				'accesspress-social-share' => array(
					'slug'      => 'accesspress-social-share',
					'filename' 	=> 'accesspress-social-share.php',
					'class' 	=> 'APSS_Class',
					'info' 		=> esc_html__('Social booster for your site! A FREE plugin with premium features.', 'swing-lite'),
				),

				'accesspress-social-icons' => array(
					'slug'      => 'accesspress-social-icons',
					'filename' 	=> 'accesspress-social-icons.php',
					'class' 	=> 'APS_Class',
					'info' 		=> esc_html__('Connect your website visitors to your social community in an easy way! Link up your social media profiles via great looking social buttons.', 'swing-lite'),
				),

				'accesspress-twitter-feed' => array(
					'slug'      => 'accesspress-twitter-feed',
					'filename' 	=> 'accesspress-twitter-feed.php',
					'class' 	=> 'APTF_Class',
					'info' 		=> esc_html__('Showcase your Tweets (Twitter Feeds) right on the site.', 'swing-lite'),
				),

				'contact-form-7' => array(
				'slug'      => 'contact-form-7',
				'filename' 	=> 'contact-form-7.php',
				'class' 	=> 'WPCF7',
				'info' => esc_html__('Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup.', 'swing-lite'),

			),

			),

			// Pro Plugins
			'pro_plugins' => array(

				'woo-product-grid-list-design' 	=> array(
					'slug' 		=> 'woo-product-grid-list-design',
					'name' 		=> esc_html__('WOO Product Grid/List Design- Responsive Products Showcase Extension for Woocommerce', 'swing-lite'),
					'version' 	=> esc_html__( '1.0.3', 'swing-lite' ),
					'author' 	=> 'AccessPress Themes',
					'filename' 	=> 'woo-product-grid-list-design.php',
					'host_type' => 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwoo-product-gridlist-design-responsive-products-showcase-extension-for-woocommerce%2F23167226',
					'screenshot' => 'https://accesspressthemes.com/plugin-repo/woo-product-grid/woo-product-grid.jpg',
					'class' 	=> 'WOPGLD_Class',
					'info' 		=> esc_html__('Design your WooCommerce shop like never before! A complete package for your Woo shop designer.', 'swing-lite'),
				),

				'woo-badge-designer' => array(
					'slug' 			=> 'woo-badge-designer',
					'name'         	=> esc_html__('Woo Badge Designer - WooCommerce Product Badge Designer WordPress Plugin', 'swing-lite'),
					'version' 		=> esc_html__('1.0.1', 'swing-lite'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'woo-badge-designer.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/LyK3o',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/woo-badge-designer/woo-badge-designer.jpg',
					'class' 		=> 'WOPGLD_Class',
					'info' 			=> esc_html__('Add some attractive badges on your product listing and single page and increase your sales upto 55%.', 'swing-lite'),
				),

				'wp-admin-white-label-login' => array(
					'slug' 			=> 'wp-admin-white-label-login',
					'name'      	=> esc_html__('WP Admin White Label Login - WordPress Plugin For Advanced Customizable Login page', 'swing-lite'),
					'version' 		=> esc_html__('1.3.5', 'swing-lite'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'wp-admin-white-label-login.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwp-admin-white-label-login-wordpress-plugin-for-advanced-customizable-login-page%2F23127723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/wp-admin-white-label-login/wp-admin-white-label-login.jpg',
					'class' 		=> 'WP_Admin_White_Label_Login',
					'info' 		=> esc_html__('Make your default wp-admin screen look like a non WP one! Choose from some great ready to use template designs and many features to boost your WordPress backend.', 'swing-lite'),
				),

				'easy-side-tab-pro' => array(
					'slug' 			=> 'easy-side-tab-pro',
					'name'      	=> esc_html__('Easy Side Tab Pro - Responsive Floating Tab Plugin For Wordpress', 'swing-lite'),
					'version' 		=> esc_html__('1.0.6', 'swing-lite'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'easy-side-tab-pro.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feasy-side-tab-pro-responsive-floating-tab-plugin-for-wordpress%2F22296723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/easy-side-tab-pro/easy-side-tab.jpg',
					'class' 		=> 'ESTP_Class',
					'info' 		=> esc_html__('Place some great designed floating tabs on your site for quick links. Increase accessibility of your site.', 'swing-lite'),
				),

				'everest-timeline' => array(
					'slug' 			=> 'everest-timeline',
					'name'         	=> esc_html__('Everest Timeline - Responsive WordPress Timeline Plugin', 'swing-lite'),
					'version' 		=> esc_html__('2.0.2', 'swing-lite'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'everest-timeline.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/everest-timeline/everest-timeline.jpg',
					'class' 		=> 'APMM_Class_Pro',
					'link'			=>'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-timeline-responsive-wordpress-timeline-plugin%2F20922265',
					'info' 		=> esc_html__('A perfect timeline maker! If you\'re planning to make one go for it!', 'swing-lite'),
				),
			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Swing Lite Welcome', 'swing-lite' ),
		'theme_short_description' => esc_html__( 'Swing Lite is a beautiful Hotel WordPress Template, specifically designed to showcase your hospitality industry like hotel, resort, accommodation, and rooms for rent. However, The template is also versatile to be used with Corporate and Agency Websites too. It is bundled up with WP Hotel Booking plugin which helps you to easily manage your rooms listings, customer bookings and reservations online, pricing plans and coupons. With its beautiful design, and high coding quality, this template can showcase your unique accommodations to the world and attract more visitors to your website.For demo https://demo.accesspressthemes.com/swing-lite', 'swing-lite' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'swing-lite'),
		'deactivate' 			=> esc_html__('Deactivate', 'swing-lite'),
		'activate' 				=> esc_html__('Activate', 'swing-lite'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'swing-lite'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'swing-lite'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/swing-lite/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'swing-lite' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'swing-lite'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'swing-lite' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'swing-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'swing-lite' ),

		

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'swing-lite'),
		'installed_btn' 	=> esc_html__('Activated', 'swing-lite'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'swing-lite'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'swing-lite'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'swing-lite'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'swing-lite' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'swing-lite' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'swing-lite' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'swing-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'swing-lite' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Swing_Lite_Welcome( $plugins, $strings );