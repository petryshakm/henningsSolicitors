<?php 
/*
Adding theme customizer options
*/


add_action('customize_register', 'theme_customize_register');

function theme_customize_register($wp_customize){
	//----------------------------------------------------------------------------------------------------header settings
	$wp_customize->add_section('header_info',
		array(
			'title' 	=> "Header settings",
			'description' => '',
		)
	);


	// --------------------------------upload logo
	$wp_customize->add_setting(
	    'logo_upload',
	    array(
	        'default'      => '',
	        'transport'    => 'refresh'
	    )
	);

	$wp_customize->add_control( 
		new WP_Customize_Upload_Control( 
		$wp_customize, 
		'logo_upload', 
		array(
			'label'      => __( 'Logotype'),
			'description'=> 'will be used for footer also',
			'section'    => 'header_info',
			'settings'   => 'logo_upload',
		) ) 
	);




	//----------------------------------------------------------------------------------------------------footer settings
	$wp_customize->add_section('footer_info',
		array(
			'title' 	=> "Footer settings",
			'description' => '',
		)
	);


	//--------------------------------footer settings
	$all_fields = array(
		array('follow_us_text', 'Follow us text', 'text'),
		array('fb_link', 'Facebook link', 'text'),
		array('f_phone_1', 'Phone number 1', 'text'),
		array('f_phone_2', 'Phone number 2', 'text'),
		array('f_adress', 'Adress', 'textarea'),
	);

	foreach ($all_fields as $s) {
		$wp_customize->add_setting($s[0],
			array(
				'default'	=>	'',
				'transport' =>	'postMessage'
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