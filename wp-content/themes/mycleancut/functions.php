<?php

// Theme Support
function mycleancut_theme_setup(){
	
	//Logo Suport
	add_theme_support('custom-logo');
	
	//post-thumbnail
    add_theme_support('post-thumbnails');
    
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
    
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
}
  
add_action('after_setup_theme','mycleancut_theme_setup');

//add js & css
function mycleancut_scripts() {
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
 
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
 
  wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Raleway:400,700', false );
  
  if(get_theme_mod('animation',1)) {
  wp_enqueue_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
  }
	
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/style.css');
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	
	wp_enqueue_script( 'custome-js', get_template_directory_uri() . '/js/main.js');
 
// 	wp_enqueue_script( 'bootstrapwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mycleancut_scripts' );
/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if

// Widget Locations
function mycleancut_init_widgets($id){
	
	register_sidebar(array(
		'name'	=> 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget'	=> '<div class="well animated fadeInRight sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));
	
	register_sidebar(array(
		'name'	=> 'Subnav',
		'id'	=> 'subnav',
		'before_widget'	=> '<div class="sub-nav">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="hide">',
		'after_title'	=> '</div>'
	));
	
	register_sidebar(array(
		'name'	=> 'Bottom',
		'id'	=> 'bottom',
		'before_widget'	=> '<div class="section-a animated fadeInUp"><div class="container">',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<div class="hide">',
		'after_title'	=> '</div>'
	));
	
}
add_action('widgets_init', 'mycleancut_init_widgets');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';

// Get Top Parent Page
function get_top_parent(){
  global $post;
  if($post->post_parent){
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }

  return $post->ID;
}

?>