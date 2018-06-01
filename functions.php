<?php 
/**
 * Kazi Theme functions and definitions
 *
 **/
// require other file
if(file_exists( dirname(__FILE__) . '/shortcodes/shortcodes.php')){
	require_once(dirname(__FILE__) . '/shortcodes/shortcodes.php');
}

if(file_exists( dirname(__FILE__) . '/lib/metabox/init.php')){
	require_once(dirname(__FILE__) . '/lib/metabox/init.php');
}
if(file_exists( dirname(__FILE__) . '/lib/metabox/config.php')){
	require_once(dirname(__FILE__) . '/lib/metabox/config.php');
}
if(file_exists( dirname(__FILE__) . '/lib/ReduxCore/framework.php')){
	require_once(dirname(__FILE__) . '/lib/ReduxCore/framework.php');
}
if(file_exists( dirname(__FILE__) . '/lib/sample/config.php')){
	require_once(dirname(__FILE__) . '/lib/sample/config.php');
}




// theme setup functions
add_action('after_setup_theme','kazi_function');
function kazi_function(){
	// text domain
	load_theme_textdomain('kazi', get_template_directory().'/lan');

	//theme supports
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-formats', array(
		'video',
		'audio',
		'quote',
		'gallery'
		));
	register_nav_menu('main-menu', __('Main Menu','kazi'));
}

// including styles
add_action('wp_enqueue_scripts', 'kazi_styles');
function kazi_styles(){
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('Animate-css', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('Slick-Slider', get_template_directory_uri().'/css/slick.css');
	wp_enqueue_style('Custom-styles', get_template_directory_uri().'/css/style.css');

	wp_enqueue_style('Color14-styles', get_template_directory_uri().'/css/colors/color-14.css');

	
	wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

// conditional scripts
add_action('wp_enqueue_scripts', 'conditional_scripts');
function conditional_scripts(){
	wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5shiv.js', array(), '', false);
	wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

	wp_enqueue_script('respond', get_template_directory_uri().'/js/respond.js', array(), '', false);
	wp_script_add_data('respond', 'conditional', 'lt IE 9');
}

// including scripts
add_action('wp_enqueue_scripts', 'kazi_scripts');
function kazi_scripts(){
	wp_enqueue_script('Bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);

	wp_enqueue_script('jQuery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery','Bootstrap'), '', true);

	wp_enqueue_script('Parallax-JS', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', array('jquery','Bootstrap','jQuery-easing'), '', true);

	wp_enqueue_script('Smoothscroll-JS', get_template_directory_uri().'/js/smoothscroll.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS'), '', true);

	wp_enqueue_script('appear-JS', get_template_directory_uri().'/js/jquery.appear.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS'), '', true);

	wp_enqueue_script('Count-to-JS', get_template_directory_uri().'/js/jquery.countTo.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS'), '', true);

	wp_enqueue_script('EasyPieChart', get_template_directory_uri().'/js/jquery.easypiechart.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS'), '', true);

	wp_enqueue_script('Mixitup', get_template_directory_uri().'/js/jquery.mixitup.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart'), '', true);

	wp_enqueue_script('Slick-Slider', get_template_directory_uri().'/js/slick.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup'), '', true);

	wp_enqueue_script('Typed-JS', get_template_directory_uri().'/js/typed.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider'), '', true);

	wp_enqueue_script('Bootstrap-form-validator', get_template_directory_uri().'/js/validator.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS'), '', true);

	wp_enqueue_script('Google-Map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBJOx2cEs3x3dTSubqABijclN_3uEmL7f8', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator'), '', true);

	wp_enqueue_script('Map-JS', get_template_directory_uri().'/js/gmaps.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator','Google-Map'), '', true);

	wp_enqueue_script('Light-Map-JS', get_template_directory_uri().'/js/light-map.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator','Google-Map','Map-JS'), '', true);

	wp_enqueue_script('Custom-JS', get_template_directory_uri().'/js/scripts.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator','Google-Map','Map-JS','Light-Map-JS'), '', true);

	wp_enqueue_script('Wow-js', get_template_directory_uri().'/js/wow.min.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator','Google-Map','Map-JS','Light-Map-JS','Custom-JS'), '', true);
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery','Bootstrap','jQuery-easing','Parallax-JS','Smoothscroll-JS','appear-JS','Count-to-JS','EasyPieChart','Mixitup','Slick-Slider','Typed-JS','Bootstrap-form-validator','Google-Map','Map-JS','Light-Map-JS','Custom-JS','Wow-js'), '', true);
}

//Slider Register
add_action( 'init', 'kazi_home_slider' );

function kazi_home_slider() {
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'slider', 'kazi' ),
		'add_new_item'       => __( 'Add New Slider', 'kazi' ),
		'new_item'           => __( 'New Slider', 'kazi' ),
		'edit_item'          => __( 'Edit Slider', 'kazi' ),
		'view_item'          => __( 'View Slider', 'kazi' ),
		'all_items'          => __( 'All Sliders', 'kazi' ),
		'search_items'       => __( 'Search Sliders', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'kazi' ),
		'not_found'          => __( 'No sliders found.', 'kazi' ),
		'not_found_in_trash' => __( 'No sliders found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','thumbnail'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-image-flip-horizontal'
	);

	register_post_type( 'kazi-slider', $args );
}

// services register
add_action( 'init', 'kazi_services' );

function kazi_services() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'service', 'kazi' ),
		'add_new_item'       => __( 'Add New Service', 'kazi' ),
		'new_item'           => __( 'New Service', 'kazi' ),
		'edit_item'          => __( 'Edit Service', 'kazi' ),
		'view_item'          => __( 'View Service', 'kazi' ),
		'all_items'          => __( 'All Services', 'kazi' ),
		'search_items'       => __( 'Search Services', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Services:', 'kazi' ),
		'not_found'          => __( 'No services found.', 'kazi' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-megaphone'
	);

	register_post_type( 'kazi-services', $args );
}

//Experiences register
add_action( 'init', 'kazi_experiences' );

function kazi_experiences() {
	$labels = array(
		'name'               => _x( 'Experiences', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Experience', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Experiences', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Experience', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'experience', 'kazi' ),
		'add_new_item'       => __( 'Add New Experience', 'kazi' ),
		'new_item'           => __( 'New Experience', 'kazi' ),
		'edit_item'          => __( 'Edit Experience', 'kazi' ),
		'view_item'          => __( 'View Experience', 'kazi' ),
		'all_items'          => __( 'All Experiences', 'kazi' ),
		'search_items'       => __( 'Search Experiences', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Experiences:', 'kazi' ),
		'not_found'          => __( 'No experiences found.', 'kazi' ),
		'not_found_in_trash' => __( 'No experiences found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'experience' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-welcome-learn-more'
	);

	register_post_type( 'kazi-experience', $args );
}

//Skill register
add_action( 'init', 'kazi_skills' );

function kazi_skills() {
	$labels = array(
		'name'               => _x( 'Skills', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Skill', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Skills', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Skill', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'skill', 'kazi' ),
		'add_new_item'       => __( 'Add New Skill', 'kazi' ),
		'new_item'           => __( 'New Skill', 'kazi' ),
		'edit_item'          => __( 'Edit Skill', 'kazi' ),
		'view_item'          => __( 'View Skill', 'kazi' ),
		'all_items'          => __( 'All Skills', 'kazi' ),
		'search_items'       => __( 'Search Skills', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Skills:', 'kazi' ),
		'not_found'          => __( 'No skills found.', 'kazi' ),
		'not_found_in_trash' => __( 'No skills found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'skill' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-thumbs-up'
	);

	register_post_type( 'kazi-skills', $args );
}

//project register
add_action( 'init', 'kazi_portfolio' );

function kazi_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'kazi' ),
		'add_new_item'       => __( 'Add New Portfolio', 'kazi' ),
		'new_item'           => __( 'New Portfolio', 'kazi' ),
		'edit_item'          => __( 'Edit Portfolio', 'kazi' ),
		'view_item'          => __( 'View Portfolio', 'kazi' ),
		'all_items'          => __( 'All Portfolio', 'kazi' ),
		'search_items'       => __( 'Search Portfolio', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'kazi' ),
		'not_found'          => __( 'No portfolio found.', 'kazi' ),
		'not_found_in_trash' => __( 'No portfolio found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','thumbnail'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-portfolio'
	);

	register_post_type( 'kazi-portfolios', $args );

}
//portfolio taxonomy register
register_taxonomy('portfolio-category', 'kazi-portfolios', array(
		'labels'	=> array(
			'name'			=> __('Types','kazi'),
			'add_new'		=> __('Add New type','kazi'),
			'add_new_item'	=> __('Add New type','kazi')
			),
		'public'	=> true,
		'hierarchical' => true

		));

//testimonials register
add_action( 'init', 'kazi_testimonials' );

function kazi_testimonials() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'kazi' ),
		'add_new_item'       => __( 'Add New Testimonial', 'kazi' ),
		'new_item'           => __( 'New Testimonial', 'kazi' ),
		'edit_item'          => __( 'Edit Testimonial', 'kazi' ),
		'view_item'          => __( 'View Testimonial', 'kazi' ),
		'all_items'          => __( 'All Testimonials', 'kazi' ),
		'search_items'       => __( 'Search Testimonials', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'kazi' ),
		'not_found'          => __( 'No testimonials found.', 'kazi' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-editor-paste-text'
	);

	register_post_type( 'kazi-testimonials', $args );

}

// clients register
add_action( 'init', 'kazi_marketplace' );

function kazi_marketplace() {
	$labels = array(
		'name'               => _x( 'Marketplace', 'post type general name', 'kazi' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'kazi' ),
		'menu_name'          => _x( 'Marketplace', 'admin menu', 'kazi' ),
		'name_admin_bar'     => _x( 'Marketplace', 'add new on admin bar', 'kazi' ),
		'add_new'            => _x( 'Add New', 'marketplace', 'kazi' ),
		'add_new_item'       => __( 'Add New Client', 'kazi' ),
		'new_item'           => __( 'New Marketplace', 'kazi' ),
		'edit_item'          => __( 'Edit Marketplace', 'kazi' ),
		'view_item'          => __( 'View Marketplace', 'kazi' ),
		'all_items'          => __( 'All Marketplace', 'kazi' ),
		'search_items'       => __( 'Search Marketplace', 'kazi' ),
		'parent_item_colon'  => __( 'Parent Marketplace:', 'kazi' ),
		'not_found'          => __( 'No marketplace found.', 'kazi' ),
		'not_found_in_trash' => __( 'No marketplace found in Trash.', 'kazi' )
		
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'kazi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'marketplace' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','thumbnail'),
		'menu_position'		 => 5,
		'menu_icon'			 => 'dashicons-awards'
	);

	register_post_type( 'kazi-marketplace', $args );

}
// Removing Redux Framework From tools .The value must be over 10

add_action( 'admin_menu', 'remove_redux_menu',12 );
	function remove_redux_menu() {
	remove_submenu_page('tools.php','redux-about');
}





//visual composer shortcode integretion
add_action('vc_before_init', 'set_as_theme_vc');

function set_as_theme_vc(){
	vc_set_as_theme();
}
 
if(function_exists('vc_map')){

	// Slider section
	vc_map(array(
		'name'						=> 'Home Slider',
		'base'						=> 'home-slider',
		'description'				=> 'This is custom Home Slider',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn1.iconfinder.com/data/icons/interface-2-2-flat/224/slider-gallery-header-web-code-32.png'

		));



	// About Me section
	vc_map(array(
		'name'						=> 'About Section',
		'base'						=> 'about-me',
		'description'				=> 'This is custom About Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn0.iconfinder.com/data/icons/iphone-black-people-svg-icons/20/info_information_user_about_card_button_symbol_icon-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'attach_image',
				'heading'		=> 'Profile Image',
				'param_name'	=> 'image',
				'description'	=> 'Upload a image',
				'value'			=> ' '
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Name',
				'param_name'	=> 'name',
				'description'	=> 'Enter name',
				'value'			=> 'Kazi Ramjan'
				),

			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Tagline',
				'param_name'	=> 'tagline',
				'description'	=> 'Add tagline',
				'value'			=> 'Web Developer'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Nationality',
				'param_name'	=> 'nationality',
				'description'	=> 'Add nationality',
				'value'			=> 'Bangladeshi'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Date of birth',
				'param_name'	=> 'date_of_birth',
				'description'	=> 'Add Date of birth',
				'value'			=> '21-01-1995'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'E-mail',
				'param_name'	=> 'e_mail',
				'description'	=> 'Add E-mail',
				'value'			=> 'kaziramjana@gmail.com'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Website',
				'param_name'	=> 'website',
				'description'	=> 'Add website',
				'value'			=> 'http://www.kazi-ramjan.com'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Phone',
				'param_name'	=> 'phone',
				'description'	=> 'Add phone',
				'value'			=> '+8801686809581'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Skype',
				'param_name'	=> 'skype',
				'description'	=> 'Add skype id',
				'value'			=> '1686809581'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'About me',
				'param_name'	=> 'about_me_content',
				'description'	=> 'Add some info about you',
				'value'			=> 'Hello, <br> I am Kazi Ramjan, Front-End Developer with 3 years of experience rapidiously productize wireless results.'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Why me',
				'param_name'	=> 'why_me_content',
				'description'	=> 'Add some info why client choose you',
				'value'			=> 'Assertively target cooperative experiences whereas tactical total linkage. Intrinsicly transition end-to-end synergy via low-risk high-yield internal or "organic" sources. Assertively synergize dynamic scenarios through user friendly services. Seamlessly communicate.'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'My vision',
				'param_name'	=> 'vision_content',
				'description'	=> 'Add some info about your vision',
				'value'			=> 'Seamlessly administrate team building opportunities after sustainable portals. Phosfluorescently incentivize cost effective action items without innovative meta-services. Globally monetize backward-compatible portals and performance based bandwidth. Distinctively underwhelm cost effective.'
				)
			)

		));

	// Ready section
			vc_map(array(
		'name'						=> 'Ready Section',
		'base'						=> 'ready-section',
		'description'				=> 'This is custom Ready Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn1.iconfinder.com/data/icons/touch-gestures-16/24/touch_hand_gesture_call_me_looser-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'I\'m Ready For your Projects. Hire Me Now'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'First Button',
				'param_name'	=> 'first_button',
				'description'	=> 'Add First Button text',
				'value'			=> 'Contact me'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'First Button link',
				'param_name'	=> 'first_button_link',
				'description'	=> 'Add First Button link',
				'value'			=> '#contact'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Second Button',
				'param_name'	=> 'second_button',
				'description'	=> 'Add Second Button text',
				'value'			=> 'My resume'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Second Button link',
				'param_name'	=> 'second_button_link',
				'description'	=> 'Add Second Button link',
				'value'			=> '#'
				)
			)

		));

		
		//funfact section
		vc_map(array(
		'name'						=> 'Funfact Section',
		'base'						=> 'funfact-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn1.iconfinder.com/data/icons/business-conceptual-flat-set-2/145/85-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'fun facts'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Synergistically create extensive intellectual capital rather than clicks-and-mortar materials.'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Projects Done',
				'param_name'	=> 'projects_done_number',
				'description'	=> 'Add number out of 100',
				'value'			=> '215'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Projects Done Icon',
				'param_name'	=> 'projects_done_icon',
				'description'	=> 'Enter Fontawesome icon text',
				'value'			=> 'fa fa-tasks'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Happy Clients',
				'param_name'	=> 'happy_clients_number',
				'description'	=> 'Add number out of 100',
				'value'			=> '650'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Happy Clients Icon',
				'param_name'	=> 'happy_clients_icon',
				'description'	=> 'Enter Fontawesome icon text',
				'value'			=> 'fa fa-users'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Hours Worked',
				'param_name'	=> 'hours_worked_number',
				'description'	=> 'Add number out of 100',
				'value'			=> '3475'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Hours Worked Icon',
				'param_name'	=> 'hours_worked_icon',
				'description'	=> 'Enter Fontawesome icon text',
				'value'			=> 'fa fa-clock-o'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Cup Of Coffee',
				'param_name'	=> 'cup_of_coffee_number',
				'description'	=> 'Add number out of 100',
				'value'			=> '215'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Cup Of Coffee Icon',
				'param_name'	=> 'cup_of_coffee_icon',
				'description'	=> 'Enter Fontawesome icon text',
				'value'			=> 'fa fa-coffee'
				)

			)

		));

		//services section
		vc_map(array(
		'name'						=> 'Services Section',
		'base'						=> 'services-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn0.iconfinder.com/data/icons/seo-and-internet-marketing-3/512/121-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'what can i do'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Continually transform process-centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital.'
				)
			)
		));

		//quote section
		vc_map(array(
		'name'						=> 'Quote Section',
		'base'						=> 'quote-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn0.iconfinder.com/data/icons/social-icons-rounded/110/Chat-Quote-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'Do You Like My Services?'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Completely orchestrate 24/365 information before best-of-breed core competencies. Collaboratively unleash customized functionalities.'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'Do You Like My Services?'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'Do You Like My Services?'
				)
			)
		));

		//experiences section
		vc_map(array(
		'name'						=> 'Experiences Section',
		'base'						=> 'experiences-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn3.iconfinder.com/data/icons/business-management-flat/64/task-planning-timeline-checklist-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'My Experiences'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Objectively cultivate equity invested customer service without intermandated methodologies. Intrinsicly productivate interactive strategic theme areas via goal-oriented.'
				)
			)
		));

		//skills section
		vc_map(array(
		'name'						=> 'Skills Section',
		'base'						=> 'skills-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn0.iconfinder.com/data/icons/project-management-2-11/65/149-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'my powerful skills'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Continually transform process-centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital. Dramatically benchmark customer.'
				)
			)
		));

		//portfolio section
		vc_map(array(
		'name'						=> 'Portfolio Section',
		'base'						=> 'portfolio-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn4.iconfinder.com/data/icons/business-conceptual-part2/513/portfolio-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'Check out my works'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Intrinsicly conceptualize real-time information without cross functional potentialities. Conveniently impact integrated benefits and ubiquitous paradigms. Dynamically architect.'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Button text',
				'param_name'	=> 'buttonn',
				'description'	=> 'Add button text',
				'value'			=> 'See more'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Button Link',
				'param_name'	=> 'buttonn_link',
				'description'	=> 'Add button link',
				'value'			=> '#'
				)
			)
		));

		//testimonials section
		vc_map(array(
		'name'						=> 'Testimonials Section',
		'base'						=> 'testimonials-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn2.iconfinder.com/data/icons/flat-school/256/school_certificate_document_testimonial_instrument-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'What my Lovely clients say'
				),
			array(
				'type' 			=> 'textarea',
				'heading'		=> 'Subtitle',
				'param_name'	=> 'subtitle',
				'description'	=> 'Add subtitle',
				'value'			=> 'Synergistically create extensive intellectual capital rather than clicks-and-mortar materials.'
				)
			)
		));

		//marketplace section
		vc_map(array(
		'name'						=> 'Marketplace Section',
		'base'						=> 'marketplace-section',
		'description'				=> 'This is custom Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn3.iconfinder.com/data/icons/seo-and-web-development-special-set-1/180/Global-32.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Title',
				'param_name'	=> 'title',
				'description'	=> 'Enter title',
				'value'			=> 'Hire me on!'
				)
			)
		));
		
  		//contact section
		vc_map(array(
		'name'						=> 'Contact Section',
		'base'						=> 'contact-section',
		'description'				=> 'This is custom Contact Section',
		'category'					=> 'Custom',
		'show_settings_on_create'	=> false,
		'icon'						=> 'https://cdn3.iconfinder.com/data/icons/alien/128/contact.png',
		'params'					=> array(
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'My place',
				'param_name'	=> 'my_place',
				'value'			=> 'Savar, Dhaka<br>Bangladesh'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Call me',
				'param_name'	=> 'call_me',
				'value'			=> '(+880)1686809581  <br> (+880)1778094008'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Send message',
				'param_name'	=> 'send_message',
				'value'			=> 'kaziramjana@gmail.com'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Work Time',
				'param_name'	=> 'work_time',
				'value'			=> 'As Needed - Open'
				),
			array(
				'type' 			=> 'textfield',
				'heading'		=> 'Contact Form Shortcode',
				'param_name'	=> 'contact_form',
				'value'			=> '[contact-form-7 id="298" title="Contact me"]'
				)
			)
		));

}
