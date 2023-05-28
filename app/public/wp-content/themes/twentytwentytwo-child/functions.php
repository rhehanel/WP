<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

add_action('acf/init', 'acf_init_block_types');
function acf_init_block_types(){
	if(function_exists('register_block_type')){
		register_block_type(get_template_directory() . "/template-parts/blocks/mainCover/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/projectFilter/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/newsFilter/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/customColums/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/tabGroup/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/tabButtons/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/emailjsForm/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/projectInfo/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/newsInfo/block.json");
	}
}

if (function_exists( 'acf_add_options_page' ) ){

	acf_add_options_page(array(
		'page_title' => 'Main menu',
		'menu_title' => 'Main menu',
		'show_in_graphql' => true,
		'icon_url' => 'dashicons-menu'
	));
}

function get_randomp() { 
    $args = array('post_type'=>'photo', 'orderby'=>'rand', 'posts_per_page'=>'1'); 
    $photos = new WP_Query($args); // Posts set to variable

    $photo = current($photos); // Get first, and only, post

    wp_reset_postdata(); // Reset posts

    return $photo->ID; // Return ID from post object
}


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
