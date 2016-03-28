<?php

/* ================================================================
   Enqueue Child Theme
   ================================================================ */
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


/* ================================================================
   // Add new styles to the TinyMCE options
   ================================================================ */

function my_mce_before_init_insert_formats( $init_array ) {  
  // Define the style_formats array
  $style_formats = array(  
    array(
      'title' => __( 'Colors', 'wpex' ),
      'items' => array(
        array(  
          'title'     => 'Main Orange',  
          'inline'    => 'span',  
          'classes'   => 'orange-main',
        ),
      ),
    ),    
  );  
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );  
  
  return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );