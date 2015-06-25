<?php
/**
 * Boot WP Starter Child Theme functions and definitions
 *
 * @package Boot WP Starter
 */

/********************************************** 
* To enqueue parent and child theme stylesheets
***********************************************/

function bootwpstarter_child_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'bootwpstarter_child_enqueue_styles' );

/********************************************** 
* Write your custom function bellow this line
***********************************************/