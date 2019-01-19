<?php 
//------------------------------------------------------------------------------------styles and scripts

function add_style() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/plugins/bootstrap.css' );
	wp_enqueue_style( 'base_style', get_stylesheet_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:300,400,700' );
	wp_enqueue_style( 'roboto-slab-font', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700' );
}
add_action( 'wp_enqueue_scripts', 'add_style' );


function enqueue_scripts() {
	wp_register_script( 'function', get_template_directory_uri() . '/js/function.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'function' );

	wp_register_script( 'theme_settings', get_template_directory_uri() . '/js/theme-settigns.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'theme_settings' );

	if ( is_page_template(array('template-contact.php')) ) {
		wp_register_script( 'gmaps', '//maps.googleapis.com/maps/api/js?key=AIzaSyAdPC0fM7chy4AJJNLEDCFxWvheICfX3FQ', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'gmaps' );

		wp_register_script( 'gmaps-include', get_template_directory_uri() . '/js/google-map.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'gmaps-include' );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );



//------------------------------------------------------------------------------------deregister jquery to footer
function jquery_in_footer() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), array(), null, true );
}
 
add_action( 'wp_enqueue_scripts', 'jquery_in_footer' );



//------------------------------------------------------------------------------------excerpts
function new_excerpt_length($length) {
	return 44;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


//------------------------------------------------------------------------------------remove height and width image attrs
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


//------------------------------------------------------------------------------------include theme customizer features
require_once ( get_template_directory() .'/functions/customizr.php' );

//------------------------------------------------------------------------------------metaboxes
require_once ( get_template_directory() .'/functions/metaboxes.php' );



// styles for customizer theme options
add_action( 'admin_enqueue_scripts', 'admin_css');
function admin_css(){
	wp_register_style('admin_css', get_bloginfo('template_url').'/css/admin_css.css', false, '1.0.0');
	wp_enqueue_style('admin_css');
}

//------------------------------------------------------------------------------------menus
function register_menus() { 
	register_nav_menus(
		array( 
			'header_menu' => 'Header menu'
		)
	);
}

add_action( 'init', 'register_menus' );


//------------------------------------------------------------------------------------logotype
function logotype(){
	
	$logo_path = get_bloginfo('template_url').'/img/logo.png';
	
	echo '<div class="logo">';
		if (is_front_page()){ 
			echo "<img src = '".$logo_path."' alt='".get_bloginfo('name')."'>";
		} else{
			echo "<a href = '".esc_url( home_url( '/' ) )."'><img src='".$logo_path."' alt='".get_bloginfo('name')."'></a>";
		}
	echo '</div>';
}


//------------------------------------------------------------------------------------image_output
function simple_image_output($image_url, $image_alt, $image_classes){
	// retrieve image html with url and alt 

	$image_classes_code = (($image_classes) ? 'class = "'.$image_classes.'"' : '');


	if ($image_url) {
		return '<img src = "'.$image_url.'" alt = "'.$image_alt.'" '.$image_classes_code.'>';
	}
}

//------------------------------------------------------------------------------------thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 440, 290, true ); // default thumb size
}


// if ( function_exists( 'add_image_size' ) ) {
// 	add_image_size( 'category-thumb', 300, 9999 ); // 300 width and any height
// 	// add_image_size( 'homepage-thumb', 220, 180, true ); // Crop the image
// 	// add_image_size( 'homepage-thumb', 220, 180, array( 'top', 'left' ) ); // crop position
// }

//------------------------------------------------------------------------------------remove generator meta
remove_action( 'wp_head', 'wp_generator' );



//------------------------------------------------------------------------------------widgets
function register_widgets(){
	register_sidebar(array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div class="single-widget-item">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<div class="widget-title">',
		'after_title' 	=> '</div>',
	));

}



add_action( 'widgets_init', 'register_widgets' );



//------------------------------------------------------------------------------------clear phone number for phone links
function clear_phone_num($phone_number){
	$repl = array(' ', '(', ')', '+', '<span>', '</span>', '-');
	$cl_phone = str_replace($repl,"",$phone_number);
	echo $cl_phone;
}




































?>