<?php
	function mycleancut_customize_register($wp_customize){
		// Showcase Section
  		$wp_customize->add_section('showcase', array(
			'title'          => __('Showcase', 'mycleancut'),
			'description'    => sprintf( __('Options for showcase area', 'mycleancut')
			),
			'priority'       => 130,
		));

		// Image Setting
		  $wp_customize->add_setting('showcase_image', array(
		    'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
		    'type'    => 'theme_mod'

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		     'label'    => __('Background Image', 'mycleancut'),
		     'section'  => 'showcase',
		     'settings' => 'showcase_image',
		     'priority' => 1,
		 )));

		 // Height Setting
		$wp_customize->add_setting( 'showcase_height', array(
			'default'              => _x(700, 'mycleancut'),
			'type'                 => 'theme_mod'
		));

		// Height Control
		$wp_customize->add_control( 'showcase_height', array(
			'label'    => __('Showcase Height', 'mycleancut'),
			'section'  => 'showcase',
			'priority' => 2,
		));

		// Heading Setting
		$wp_customize->add_setting( 'showcase_heading', array(
			'default'              => _x('mycleancut Theme', 'mycleancut'),
			'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'showcase_heading', array(
			'label'    => __('Heading', 'mycleancut'),
			'section'  => 'showcase',
			'priority' => 3,
		));

		// Text Setting
		$wp_customize->add_setting( 'showcase_text', array(
			'default'              => _x('Custom Wordpress Theme By You', 'mycleancut'),
			'type'                 => 'theme_mod'
		));

		// Text Control
		$wp_customize->add_control( 'showcase_text', array(
			'label'    => __('Text', 'mycleancut'),
			'section'  => 'showcase',
			'priority' => 4,
		));


		// Social Section
		 $wp_customize->add_section('social', array(
		     'title'          => __('Social', 'mycleancut'),
		     'description'    => sprintf( __('Social media urls', 'mycleancut')
		     ),
		     'priority'       =>140,
		 ));

		 // Facebook URL Setting
		 $wp_customize->add_setting('facebook_url', array(
		   'default'              => _x('http://www.facebook.com', 'mycleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Facebook URL Control
		 $wp_customize->add_control( 'facebook_url', array(
		   'label'    => __('Facebook URL', 'mycleancut'),
		   'section'  => 'social',
		   'priority' => 1,
		 ));

		 // Twitter URL Setting
		$wp_customize->add_setting('twitter_url', array(
		'default'              => _x('http://www.twitter.com', 'mycleancut'),
		'type'                 => 'theme_mod'
		));

		// Twitter URL Control
		$wp_customize->add_control( 'twitter_url', array(
		'label'    => __('Twitter URL', 'mycleancut'),
		'section'  => 'social',
		'priority' =>2,
		));

		// Linkedin URL Setting
		 $wp_customize->add_setting('linkedin_url', array(
		   'default'              => _x('http://www.linkedin.com', 'mycleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Linkedin URL Control
		 $wp_customize->add_control( 'linkedin_url', array(  
		   'label'    => __('LinkedIn URL', 'mycleancut'),
		   'section'  => 'social',
		   'priority' =>2,
		 ));
		 // Bottom Banner Section
		$wp_customize->add_section('banner', array(
		    'title'          => __('Bottom Banner', 'mycleancut'),
		    'description'    => sprintf( __('Options for bottom banner area', 'mycleancut')
		    ),
		    'priority'       => 160,
		));
		// Image Setting
		$wp_customize->add_setting('banner_image', array(
		'default' => get_bloginfo('template_directory') . '/img/banner.jpg',
		'type'    => 'theme_mod'

		));

		// Image Control
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'    => __('Background Image', 'mycleancut'),
		'section'  => 'banner',
		'settings' => 'banner_image',
		'priority' => 1,
		)));
		
		// Heading Setting
		$wp_customize->add_setting( 'banner_heading', array(
		  'default'              => _x('Follow Us On Social Media', 'mycleancut'),
		  'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'banner_heading', array(
		  'label'    => __('Heading', 'mycleancut'),
		  'section'  => 'banner',
		  'priority' => 3,
		));
		
		// Misc Options Section
		$wp_customize->add_section('misc', array(
		 'title'          => __('Misc Options', 'mycleancut'),
		 'description'    => sprintf( __('Misc options for theme', 'mycleancut')
		 ),
		 'priority'       => 150,
		));

		$wp_customize->add_setting('animation', array(
	    'default'    => '1'
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'animation',
	        array(
	            'label'     => __('Enable Animation', 'mycleancut'),
	            'section'   => 'misc',
	            'settings'  => 'animation',
	            'type'      => 'checkbox',
	        )
	    ));


	}

add_action('customize_register','mycleancut_customize_register');