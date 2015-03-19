<?php

    $menuList = array(
        "main_menu" => "Main Navigation Menu",
        "footer_menu" => "Footer Menu: Bottom");
    
    register_nav_menus($menuList);
    
    register_sidebar(array(
        "name" => "Right Sidebar",
        "id" => "right_aside",
        "description" => "Will appear on the right :)",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget_title'>",
        "after_title" => "</h3>"
    ));
    
    add_theme_support('post-thumbnails');
    
    // Custom Excerpt Length   
class Excerpt {

      // Default length (by WordPress)
      public static $length = 55;
    
      // So you can call: my_excerpt('short');
      public static $types = array(
          'short' => 25,
          'regular' => 55,
          'long' => 100
        );
     
      public static function length($new_length = 55) {
        Excerpt::$length = $new_length;
    
        add_filter('excerpt_length', 'Excerpt::new_length');
    
        Excerpt::output();
      }
    
      // Tells WP the new length
      public static function new_length() {
        if( isset(Excerpt::$types[Excerpt::$length]) )
          return Excerpt::$types[Excerpt::$length];
        else
          return Excerpt::$length;
      }
    
      // Echoes out the excerpt
      public static function output() {
        the_excerpt();
      }
}
    // An alias to the class
    function my_excerpt($length = 55) {
      Excerpt::length($length);
    }
   
    function new_excerpt_more( $more ) {
    return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
    
    
    
    // Custom Post Type ******* EXPERIENCES ********** Custom Post Type
    
    add_action( 'init', 'register_cpt_testimonial');

    function register_cpt_testimonial(){
    $labels = array(
    'name' => _x( 'Testimonials', 'testimonial' ),
    'singular_name' => _x( 'Testimonial', 'testimonial' ),
    'add_new' => _x( 'Add New', 'testimonial' ),
    'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
    'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
    'new_item' => _x( 'New Testimonial', 'testimonial' ),
    'view_item' => _x( 'View Testimonial', 'testimonial' ),
    'search_items' => _x( 'Search Testimonials', 'testimonial' ),
    'not_found' => _x( 'No Testimonials found', 'testimonial' ),
    'not_found_in_trash' => _x( 'No Testimonials found in Trash', 'testimonial' ),
    'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
    'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'Client Testimonials ',
    'supports' => array( 'title', 'editor' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => false,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'experience', $args );

    // Custom Taxonomies
    
     $client_page_area_tax_labels = array(
        'name' => _x( 'Page Area', 'taxonomy general name' ),
        'singular_name' => _x( 'Page Area', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Page Area' ),
        'all_items' => __( 'All Page Area' ),
        'parent_item' => __( 'Parent Page Area' ),
        'parent_item_colon' => __( 'Parent Page Area:' ),
        'edit_item' => __( 'Edit Page Area' ), 
        'update_item' => __( 'Update Page Area' ),
        'add_new_item' => __( 'Add New Page Area' ),
        'new_item_name' => __( 'New Page Area Name' ),
        'menu_name' => __( 'Page Area' ),
      ); 
         
    register_taxonomy( 'page-areas',array('experience'),
            array(
                'hierarchical' => true,
                'labels' => $client_page_area_tax_labels,
                'query_var' => true,
                'rewrite' => array('slug' => 'page-area')
            ));

    };