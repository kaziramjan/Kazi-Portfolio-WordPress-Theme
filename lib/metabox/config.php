<?php 

//Slider
add_action('cmb2_admin_init', 'metabox_for_slides');
function metabox_for_slides(){
	$slider = new_cmb2_box(array(
		'title'			=>__('Slide Button','kazi'),
		'id'			=> 'slide-button',
		'object_types'	=>array('kazi-slider')

		));
	$slider->add_field(array(
		'id'	=>'_button-text',
		'type'	=>'text',
		'name'	=>'Button text:'
		));
	$slider->add_field(array(
		'id'	=>'_button-url',
		'type'	=>'text',
		'name'	=>'Button url:'
		));
	$slider->add_field(array(
		'id'		=> '_button-color',
		'type'		=> 'select',
		'name'		=> 'Button Color:',
		'options'	=> array(
			'default'	=> 'Default',
			'light'		=> 'Light',
			'dark'		=> 'Dark'
			)

		));

	$slider->add_field(array(
		'id'		=> '_content-position',
		'type'		=> 'select',
		'name'		=> 'Slide content position:',
		'options'	=> array(
			'left'		=> 'Left',
			'center'	=> 'Center'
			)

		));
	
}

//services
add_action('cmb2_admin_init', 'metabox_for_services');
function metabox_for_services(){
	$services = new_cmb2_box(array(
		'title'			=>__('Service icon','kazi'),
		'id'			=> 'service-icon',
		'object_types'	=>array('kazi-services')

		));
	$services->add_field(array(
		'id'	=>'_service-icon',
		'type'	=>'text',
		'name'	=>'Icon:',
		'attributes'  => array(
			'placeholder' => 'fa fa-icon'
		)

		));
	$services->add_field(array(
		'id'	=>'_service-content',
		'type'	=>'textarea',
		'name'	=>'Describe:'
		));
}

//experience
add_action('cmb2_admin_init', 'metabox_for_experience');
function metabox_for_experience(){
	$experience = new_cmb2_box(array(
		'title'			=> 'Job',
		'id'			=> 'experience',
		'object_types'	=>array('kazi-experience')

		));
	$experience->add_field(array(
		'id'	=>'_job-title',
		'type'	=>'text',
		'name'	=>'Job Title:',
		));
	$experience->add_field(array(
		'id'	=>'_job-year',
		'type'	=>'text_date',
		'name'	=>'Year:',
		));
	$experience->add_field(array(
		'id'	=>'_job-icon',
		'type'	=>'text',
		'name'	=>'Icon:',
		'attributes'  => array(
			'placeholder' => 'fa fa-icon'
		)
		));
	$experience->add_field(array(
		'id'	=>'_job-content',
		'type'	=>'textarea',
		'name'	=>'Describe:'
		));
}
//skill
add_action('cmb2_admin_init', 'metabox_for_skill');
function metabox_for_skill(){
	$services = new_cmb2_box(array(
		'title'			=>__('Skill Percentage','kazi'),
		'id'			=> 'skill-percentage',
		'object_types'	=>array('kazi-skills')

		));
	$services->add_field(array(
		'id'	=>'_skill-percentage',
		'type'	=>'text_small',
		'name'	=>'Number Out Of 100',
		));
}
//portfolio
add_action('cmb2_admin_init', 'metabox_for_portfolio');
function metabox_for_portfolio(){
	$portfolio = new_cmb2_box(array(
		'title'			=>__('Button','kazi'),
		'id'			=> 'portfolio-button',
		'object_types'	=>array('kazi-portfolios')

		));

	$portfolio->add_field(array(
		'id'	=>'_second-button-text',
		'type'	=>'text_small',
		'name'	=>'Button Text:',
		));
	$portfolio->add_field(array(
		'id'	=>'_second-button-link',
		'type'	=>'text_url',
		'name'	=>'Button Link:',
		));
	$portfolio->add_field(array(
		'id'	=>'_second-button-color',
		'type'	=>'select',
		'name'	=>'Button Color:',
		'options'	=> array(
			'light'	=> 'Light',
			'dark'	=> 'Dark'
			)
		));
}

//Testimonials 
add_action('cmb2_admin_init', 'metabox_for_testimonials');
function metabox_for_testimonials(){
	$testimonials = new_cmb2_box(array(
		'title'			=>__('Testimonial form','kazi'),
		'id'			=> 'client-info',
		'object_types'	=>array('kazi-testimonials')

		));
	$testimonials->add_field(array(
		'id'	=>'_client-review',
		'type'	=>'wysiwyg',
		'name'	=>'Give a review:',
		));
}

//marketplace
add_action('cmb2_admin_init', 'metabox_for_marketplace');
function metabox_for_marketplace(){
	$marketplace= new_cmb2_box(array(
		'title'			=>__('Marketplace Link','kazi'),
		'id'			=> 'marketplace-link',
		'object_types'	=>array('kazi-marketplace')

		));
	$marketplace->add_field(array(
		'id'	=>'_marketplace-link',
		'type'	=>'text_url',
		'name'	=>'Profile link:',
		));
}
