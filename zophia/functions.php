<?php
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() { 
            register_nav_menu( 'primary', __( 'Primary navigation', '' ) );
        } endif;


function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

require_once('wp_bootstrap_navwalker.php');

class DD_Wolker_Menu extends Walker_Nav_Menu {
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
	    $GLOBALS['dd_children'] = ( isset($children_elements[$element->ID]) )? 1:0;
        $GLOBALS['dd_depth'] = (int) $depth;
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}
add_filter('nav_menu_css_class','add_parent_css',10,2);
function  add_parent_css($classes, $item){
     global  $dd_depth, $dd_children;
     $classes[] = 'depth'.$dd_depth;
     if($dd_children)
         $classes[] = 'parent';
    return $classes;
}

if ( function_exists('register_sidebar') )
register_sidebar(array(
   'name' => 'Blog',
    'id' => 'blog-sidebar',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Banner Widget',
    'id' => 'home-banner',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Home Left Widget',
    'id' => 'home-left',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Home Right Widget',
    'id' => 'home-right',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Footer Left Widget',
    'id' => 'footer-left',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Footer Middle Widget',
    'id' => 'footer-middle',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
register_sidebar(array(
   'name' => 'Footer Right Widget',
    'id' => 'footer-right',
    'description' => 'Widgets in this area will be shown in the footer.',
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

//Shows the Posts Thumbnails
if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' ); } //Adds thumbnails compatibility to the theme
    set_post_thumbnail_size( 369, 278, true ); // Sets the Post Main Thumbnails
    add_image_size( 'recent-thumbnails', 369, 278, true ); // Sets Recent Posts Thumbnails

//Excerpt
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('show_admin_bar', '__return_false');
?>


