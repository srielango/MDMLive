<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','newses-style','newses-default','font-awesome','smartmenus','newses-swiper.min' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function acf_set_featured_image( $value, $post_id, $field  ){
    
    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    //add_post_meta($post_id, '_thumbnail_id', $value);
        update_post_meta($post_id, '_thumbnail_id', $value->ID);
    }
 
    return $value;
}

function acf_set_slug( $value, $post_id, $field  ){
    
    $new_slug = $value;

    // update post
    wp_update_post( array(
        'ID' => $post_id,
        'post_name' => $new_slug,
        ) );

        //if ( ! wp_is_post_revision( $post_id ) ){

            // unhook this function so it doesn't loop infinitely
            remove_action('save_post', 'acf_set_slug');
        
            // update the post, which calls save_post again
            wp_update_post( $recipe_postdata );
        
            // re-hook this function
            //add_action('save_post', 'acf_set_slug');
        //}

    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=Featured_Image', 'acf_set_featured_image', 10, 3);
// add_filter('acf/update_value/name=slug_editor', 'acf_set_slug', 10, 3);

// function set_slug($post_id){
//     $new_slug = $_POST['acf']['slug_editor']; //get_post_meta($post_id,'slug_editor', true);    
//     $post_args = array(
//         'ID' => $post_id,
//         'post_name' => $new_slug,
//     );

//     wp_update_post($post_args);
// }

//add_action('acf/save_post', 'acf_set_slug', 1);

function newses_setup_additional() {
    add_image_size('postImage', 480, 350, true);
    add_image_size('headerImageBackground', 1600, 600, true);
}

add_action( 'after_setup_theme', 'newses_setup_additional' );