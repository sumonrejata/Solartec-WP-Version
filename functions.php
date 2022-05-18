<?php

function RST_Solartec_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('our_service',356,238);
	add_image_size('portfolio',356,238);
	add_image_size('team_mem',268,310);
	

	register_nav_menus(array(
		'main_menu'		=> __('Main Menu','rst_startup'),
		'footer_menu'		=> __('Footer Menu','rst_startup'),
	));

} 
add_action('after_setup_theme','RST_Solartec_theme_setup');


function Solartec_Theme_CSS(){
	wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap', array(), '1.0.0', 'all' );
	wp_enqueue_style('all_min_css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style('bootstrap_icon', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'animate_main_css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'bootstrap_main', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_default_css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'theme_style', get_stylesheet_uri() );

	// Start Theme JS File

	 wp_enqueue_script( 'js_main_1', get_template_directory_uri() . '/https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_2', get_template_directory_uri() . '/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_3', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_4', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_5', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_6', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_7', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_8', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_9', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_10', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts','Solartec_Theme_CSS');




if( file_exists(dirname(__FILE__)) . '/inc/class-wp-bootstrap-navwalker.php' ){
	require_once( dirname(__FILE__) . '/inc/class-wp-bootstrap-navwalker.php' );
}

if( file_exists(dirname(__FILE__)) . '/inc/solartec_custom_post.php' ){
	require_once( dirname(__FILE__) . '/inc/solartec_custom_post.php' );
}

// ACF Jason

function Startup_ACF_Jason( $path ) {   
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path;  
}
add_filter('acf/settings/save_json', 'Startup_ACF_Jason');


// ACF Theme Options

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Options',
		'menu_title'	=> 'Header Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Feature Settings',
		'menu_title'	=> 'Feature',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Settings',
		'menu_title'	=> 'About Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Service Settings',
		'menu_title'	=> 'Service Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Why Choose Us Options',
		'menu_title'	=> 'Why Choose Us Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Portfolio Options',
		'menu_title'	=> 'Portfolio Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Team Options',
		'menu_title'	=> 'Team Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Testimonial Options',
		'menu_title'	=> 'Testimonial Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Options',
		'menu_title'	=> 'Contact Options',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}




// Breadcum
function get_breadcrumb() {
    //echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}







