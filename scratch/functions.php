<?php
/*
 *  Theme customizations
 *  
 *  @package     Scratch
 *  @author      Justin Gries
 *  @license     GPL-2.0+
 */

// load child theme text-domain
load_child_theme_textdomain('scratch');


// Run this with priority 15 so that it can unregister sidebars that will be 
// registered when genesis runs
add_action('genesis_setup', 'scratch_setup');
add_action('genesis_setup', 'scratch_postsetup', 15);

/*
 *  Theme Setup.
 * 
 *  Attach all site-wide functions to the correct hooks & filters.
 *  Functions are defined below this setup function.
 * 
 *  @since 1.0.0
 */
function scratch_setup(){
    
    // Define theme constants
    define('CHILD_THEME_NAME', 'Scratch');
    define('CHILD_THEME_URL', 'http://github.com/slick514/scratchTheme');
    define('CHILD_THEME_VERSION', '1.0.0');
    
    // Add support for HTML5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
    
    // Add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport');
    
    // Add accessibility support
    add_theme_support( 'genesis-accessibility', array(
        '404-page',
        'drop-down-menu',
        'headings',
        'rems',
        'search-form',
        'skip-links',
    ));
    
    // Add support for (3) footer widgets
    add_theme_support('genesis-footer-widgets', 3);
    
    // Unregister layouts that use 2ry sidebar
    genesis_unregister_layout('content-sidebar-sidebar');
    genesis_unregister_layout('sidebar-content-sidebar');
    genesis_unregister_layout('sidebar-sidebar-content');
    
}

/*
 *  Post-Setup
 * 
 *  Functionality that needs to wait for the genesis setup to finish before
 *  running
 * 
 *  @since 1.0.0
 */
function scratch_postsetup(){
    // Add theme widget areas
    include_once(get_stylesheet_directory() . '/includes/widget-areas.php');

    // Unregister secondary sidebar
    unregister_sidebar('sidebar-alt');
}

add_action('wp_enqueue_scripts','scratch_enqueue_styles');
/**
 *  Font style importing
 * 
 *  For bringing in fonts that we need...
 * 
 *  @since 1.0.0
 */
function scratch_enqueue_styles(){
    $handle = 'google-fonts';
    $src = '//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Lobster';
    
    wp_enqueue_style($handle, $src);
}