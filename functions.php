<?php
/**
 * Native Canvas Block Theme functions and definitions.
 *
 * @package Native_Canvas
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 *
 * Registers core block theme features only. No deprecated PHP, no external
 * frameworks, no layout abstractions. Relies solely on the WordPress Block API.
 */
function native_canvas_setup() {
    // Add theme support for the document title tag.
    add_theme_support( 'title-tag' );

    // Add theme support for post thumbnails (featured images).
    add_theme_support( 'post-thumbnails' );

    // Add theme support for align-wide (wide and full alignments in blocks).
    add_theme_support( 'align-wide' );

    // Add theme support for HTML5 markup where appropriate.
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add theme support for core block styles.
    add_theme_support( 'wp-block-styles' );

    // Register navigation menus for native Navigation block compatibility.
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'native-canvas' ),
        'footer'  => __( 'Footer Navigation', 'native-canvas' ),
    ) );
}
add_action( 'after_setup_theme', 'native_canvas_setup' );

/**
 * Enqueue theme assets.
 *
 * Kept intentionally minimal. Block themes rely on theme.json for styling.
 * No default CSS or JS is injected so the theme remains a clean canvas that
 * accepts raw HTML, inline CSS, and vanilla JS inside Custom HTML blocks.
 */
function native_canvas_assets() {
    // style.css is required for theme identification but theme.json handles styling.
    // No additional assets are enqueued by default.
}
add_action( 'wp_enqueue_scripts', 'native_canvas_assets' );