<?php 
/*
Adding theme customizer options
*/


add_action('customize_register', 'theme_customize_register');

function theme_customize_register($wp_customize){
	//----------------------------------------------------------------------------------------------------header settings
	$wp_customize->add_section('header_info',
		array(
			'title' 	=> "Header + Contacts settings",
			'description' => 'all global header and contacts data',
		)
	);


	//--------------------------------header settings
	$all_fields = array(
		array('phone_number', 'Phone number', 'text'),
		array('admin_email', 'Email', 'text'),
		array('fb_link', 'FB link', 'text'),
		array('tw_link', 'Twitter link', 'text'),
		array('ins_link', 'Instagram link', 'text'),
		array('gpl_link', 'Google+ link', 'text')
	);

	foreach ($all_fields as $s) {
		$wp_customize->add_setting($s[0],
			array(
				'default'	=>	'',
				'transport' =>	'refresh'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Control($wp_customize, $s[0],
				array(
					'label'		=> $s[1],
					'section'	=> 'header_info',
					'settings'	=> $s[0],
					'type'		=> $s[2],	
				)
			)
		);
	} //end foreach


	//----------------------------------------------------------------------------------------------------footer settings
	$wp_customize->add_section('footer_info',
		array(
			'title' 	=> "Footer settings",
			'description' => 'Some settings are used on Contact page',
		)
	);


	//--------------------------------footer settings
	$all_fields = array(
		array('footer_title', 'Title', 'text'),
		array('footer_address', 'Address', 'textarea'),
		array('footer_phones', 'Phones', 'textarea'),
		array('footer_copyright', 'Copyright text', 'text'),
		array('footer_text', 'Additinal text', 'textarea'),
		array('privacy_policy_link', 'Privacy policy page', 'dropdown-pages')

	);

	foreach ($all_fields as $s) {
		$wp_customize->add_setting($s[0],
			array(
				'default'	=>	'',
				'transport' =>	'refresh'
				)
		);

		$wp_customize->add_control(
			new WP_Customize_Control($wp_customize, $s[0],
				array(
					'label'		=> $s[1],
					'section'	=> 'footer_info',
					'settings'	=> $s[0],
					'type'		=> $s[2],	
				)
			)
		);
	} //end foreach

	// --------------------------------quality logo
	$wp_customize->add_setting(
	    'quality_logo',
	    array(
	        'default'      => '',
	        'transport'    => 'refresh'
	    )
	);

	$wp_customize->add_control( 
		new WP_Customize_Upload_Control( 
		$wp_customize, 
		'quality_logo', 
		array(
			'label'      => __( 'Quality logo'),
			'description'=> '',
			'section'    => 'footer_info',
			'settings'   => 'quality_logo',
		) ) 
	);

	
}



	
/*
types of fields:
	text (default)
	checkbox
	radio (requires choices array in $args)
	select (requires choices array in $args)
	dropdown-pages
	textarea (since WordPress 4.0)
*/


?>