<?php
add_theme_support('post-thumbnails');
add_theme_support('editor-styles');
add_image_size('home', 1920, 600, true);


function elix_add_editor_styles()
{
	add_editor_style('style-editor.css');
}
add_action('admin_init', 'elix_add_editor_styles');



// Load scripts & css
function flexupdate_scripts()
{
	// Scripts
	wp_enqueue_script('jquery', get_template_directory_uri() . '/bootstrap/js/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('slickslider', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);

	// Scrollmagic
	wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.0.0', true);
	wp_enqueue_script('ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), '1.0.0', true);
	wp_enqueue_script('AnimationGsap', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('addIndicators', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array(), '1.0.0', true);

	// Custom JS
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);

	// CSS
	wp_enqueue_style('bootcss', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'flexupdate_scripts');

// Add option page
acf_add_options_page(array(

	'page_title' 	=> 'Website informatie',
	'menu_title' 	=> 'Logo & Opties',
	'menu_slug' 	=> 'website-informatie',
	'capability' 	=> 'edit_posts',
	'icon_url' => 'dashicons-universal-access-alt',
	'position' => 3

));

// Menu's
function register_my_menus()
{
	register_nav_menus(
		array(
			'main_menu' => __('Hoofd Menu'),
			'extra_menu' => __('Footer Menu'),
		)
	);
}
add_action('init', 'register_my_menus');


function arphabet_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Footer een',
		'id'            => 'footer_1',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name'          => 'Footer twee',
		'id'            => 'footer_2',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name'          => 'Footer drie',
		'id'            => 'footer_3',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// ACF Blocks - Homepagina header
add_action('acf/init', 'header_block');
function header_block()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'homeheader',
			'title'				=> __('Homepagina header'),
			'description'		=> __('Voeg een header toe aan de homepagina.'),
			'render_callback'	=> 'home_header_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'dashicons-art',
			'keywords'			=> array('header', 'homepagina'),
		));
	}
}

function home_header_render($block)
{

	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// ACF Blocks - Homepagina content
add_action('acf/init', 'home_content');
function home_content()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'homecontent',
			'title'				=> __('Homepagina content'),
			'description'		=> __('Voeg een contentblock toe onder de header'),
			'render_callback'	=> 'home_content_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'dashicons-art',
			'keywords'			=> array('content', 'homepagina', 'home'),
		));
	}
}

function home_content_render($block)
{

	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// ACF Blocks - Homepagina content
add_action('acf/init', 'home_callout');
function home_callout()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'homecallout',
			'title'				=> __('Homepagina call out'),
			'description'		=> __('Voeg een contentblock toe onder de header'),
			'render_callback'	=> 'home_callout_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'dashicons-art',
			'keywords'			=> array('content', 'homepagina', 'home', 'call', 'out'),
		));
	}
}

function home_callout_render($block)
{

	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// ACF Blocks - Pagina Elix waarden
add_action('acf/init', 'page_elixwaarden');
function page_elixwaarden()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'pageelixwaarden',
			'title'				=> __('Elix waarden'),
			'description'		=> __('Voeg een contentblock toe onder de header'),
			'render_callback'	=> 'page_elixwaarden_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'dashicons-art',
			'keywords'			=> array('content', 'pagina', 'waarden', 'elix', 'elix waarden'),
		));
	}
}

function page_elixwaarden_render($block)
{

	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// Prijzen pakket
add_action('acf/init', 'pricepackage');
function pricepackage()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'pricespackages',
			'title'				=> __('Prijs pakket'),
			'description'		=> __('Voeg een prijs pakket toe'),
			'render_callback'	=> 'pricespackages_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> '<svg id="Layer_1" enable-background="new 0 0 511.414 511.414" height="512" viewBox="0 0 511.414 511.414" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m497.695 108.838c0-6.488-3.919-12.334-9.92-14.8l-225.988-92.838c-3.896-1.6-8.264-1.6-12.16 0l-225.988 92.838c-6.001 2.465-9.92 8.312-9.92 14.8v293.738c0 6.488 3.918 12.334 9.92 14.8l225.988 92.838c3.854 1.583 8.186 1.617 12.14-.001.193-.064-8.363 3.445 226.008-92.837 6.002-2.465 9.92-8.312 9.92-14.8zm-241.988 76.886-83.268-34.207 179.951-78.501 88.837 36.495zm-209.988-51.67 71.841 29.513v83.264c0 8.836 7.164 16 16 16s16-7.164 16-16v-70.118l90.147 37.033v257.797l-193.988-79.692zm209.988-100.757 55.466 22.786-179.951 78.501-61.035-25.074zm16 180.449 193.988-79.692v257.797l-193.988 79.692z"/></svg>',
			'keywords'			=> array('prijs', 'pakket'),
		));
	}
}

function pricespackages_render($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// Prijzen voorbeeld
add_action('acf/init', 'pricepackagepreview');
function pricepackagepreview()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'pricepackagepreview',
			'title'				=> __('Prijs pakket voorbeeld'),
			'description'		=> __('Voeg een prijs pakket voorbeeld toe'),
			'render_callback'	=> 'pricepackagepreview_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> '<svg id="Layer_1" enable-background="new 0 0 511.414 511.414" height="512" viewBox="0 0 511.414 511.414" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m497.695 108.838c0-6.488-3.919-12.334-9.92-14.8l-225.988-92.838c-3.896-1.6-8.264-1.6-12.16 0l-225.988 92.838c-6.001 2.465-9.92 8.312-9.92 14.8v293.738c0 6.488 3.918 12.334 9.92 14.8l225.988 92.838c3.854 1.583 8.186 1.617 12.14-.001.193-.064-8.363 3.445 226.008-92.837 6.002-2.465 9.92-8.312 9.92-14.8zm-241.988 76.886-83.268-34.207 179.951-78.501 88.837 36.495zm-209.988-51.67 71.841 29.513v83.264c0 8.836 7.164 16 16 16s16-7.164 16-16v-70.118l90.147 37.033v257.797l-193.988-79.692zm209.988-100.757 55.466 22.786-179.951 78.501-61.035-25.074zm16 180.449 193.988-79.692v257.797l-193.988 79.692z"/></svg>',
			'keywords'			=> array('prijs', 'pakket'),
		));
	}
}

function pricepackagepreview_render($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// USPS
add_action('acf/init', 'usps');
function usps()
{

	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'usps',
			'title'				=> __('Unique selling points'),
			'description'		=> __('Voeg usps toe'),
			'render_callback'	=> 'usps_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'f323',
			'keywords'			=> array('prijs', 'pakket'),
		));
	}
}

function usps_render($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// Blokken carrousel
add_action('acf/init', 'carrousel');
function carrousel()
{


	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'carrousel',
			'title'				=> __('Blokken carrousel'),
			'description'		=> __('Voeg carrousel toe'),
			'render_callback'	=> 'carrousel_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> 'f323',
			'keywords'			=> array('carrousel', 'slider', 'diensten', 'rotator'),
		));
	}
}

function carrousel_render($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// Werkwijze
add_action('acf/init', 'werkwijze');
function werkwijze()
{


	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'werkwijze',
			'title'				=> __('Werkwijze'),
			'description'		=> __('Voeg werkwijze toe'),
			'render_callback'	=> 'werkwijze_render',
			'category'			=> 'bruut_braaf',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 128 128"><path d="M102.568,83H93.854V65.216a1.749,1.749,0,0,0-1.75-1.75H72.57a1.75,1.75,0,0,0-1.75,1.75v.263a21.167,21.167,0,0,0-3.4-1.259A15.544,15.544,0,0,0,74.17,51.412V49.534h1.543a1.75,1.75,0,0,0,1.75-1.75V43.4a1.749,1.749,0,0,0-1.713-1.747A17.181,17.181,0,0,0,62.557,26.635a4.106,4.106,0,0,0-7.88,0,17.136,17.136,0,0,0-13.2,15.016,1.748,1.748,0,0,0-1.71,1.747v4.389a1.749,1.749,0,0,0,1.75,1.75h1.541v1.878a15.544,15.544,0,0,0,6.772,12.825A21.3,21.3,0,0,0,34.234,83h-8.8a1.749,1.749,0,0,0-1.75,1.75v6.917a1.749,1.749,0,0,0,1.75,1.75H28.75v9.151a1.75,1.75,0,0,0,3.5,0V93.417h1.9v9.151a1.75,1.75,0,0,0,3.5,0V93.417H90.354v9.151a1.75,1.75,0,0,0,3.5,0V93.417h1.9v9.151a1.75,1.75,0,0,0,3.5,0V93.417h3.318a1.749,1.749,0,0,0,1.75-1.75V84.75A1.749,1.749,0,0,0,102.568,83ZM80.921,66.966h2.833v3.026l-.482-.3a1.744,1.744,0,0,0-1.869,0l-.482.3Zm-3.5,0v6.2a1.75,1.75,0,0,0,2.684,1.479l2.232-1.409,2.232,1.409a1.75,1.75,0,0,0,2.685-1.479v-6.2h3.1V83H74.32V66.966ZM43.271,46.034v-.889H73.963v.889Zm14.713-18.22a.633.633,0,0,1,1.265,0v5.458a.633.633,0,0,1-1.265,0Zm-3.5,2.5v2.963a4.133,4.133,0,0,0,8.265,0V30.309a13.684,13.684,0,0,1,9.472,11.336H45.01A13.643,13.643,0,0,1,54.484,30.309Zm-7.922,21.1V49.534H70.67v1.878a12.054,12.054,0,1,1-24.108,0ZM55.43,66.966H61.8A17.77,17.77,0,0,1,70.82,69.42V83H49.472V78.93a1.75,1.75,0,0,0-3.5,0V83H37.734A17.806,17.806,0,0,1,55.43,66.966Zm45.388,22.951H27.182V86.5h73.636Z"/></svg>',
			'keywords'			=> array('werkwijze', 'diensten'),
		));
	}
}

function werkwijze_render($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
	}
}

// Kleuren pallet

add_theme_support('editor-color-palette', array(
	array(
		'name'  => __('Blue', 'ea_genesis_child'),
		'slug'  => 'blue',
		'color'	=> '#425CC7',
	),
	array(
		'name'  => __('Paragraph', 'ea_genesis_child'),
		'slug'  => 'Paragraph',
		'color' => '#252525',
	),
));

add_theme_support('disable-custom-colors');
add_theme_support('editor-gradient-presets', []);
add_theme_support('disable-custom-gradients', true);
add_theme_support('disable-custom-radius');



//Gutenberg block script rout
if (!defined('WP_BLOCKS_URL')) {
	define('WP_BLOCKS_URL', get_template_directory_uri() . '/blocks/');
}

//Register Gutenberg block section
function content_gutenberg_block()
{

	if (!function_exists('register_block_type')) return; //Gutenberg is not active

	//Script version
	$version = time(); //Сhange to a fixed number after development

	//Section block script
	wp_register_script(
		'wp-section-block-script',
		WP_BLOCKS_URL . 'section/block.js',
		array('wp-blocks', 'wp-element', 'wp-editor'),
		$version
	);

	//Register block
	register_block_type('content/section', array(
		'editor_script' => 'wp-section-block-script',
	));
}
add_action('init', 'content_gutenberg_block');







function my_blocks_plugin_block_categories($categories)
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'bruut_braaf',
				'title' => __('Thema blokken', 'elix'),
			),
		)
	);
}
add_filter('block_categories', 'my_blocks_plugin_block_categories', 10, 2);
