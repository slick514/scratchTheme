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

add_action('genesis_setup', 'scratch_setup');
/*
 *  Theme Setup.
 * 
 *  Attach all site-wide functions to the correct hooks & filters.
 *  Functions are defined below this setup function.
 * 
 *  @since 1.0.0
 */
function scratch_setup(){
    
    // define theme constants
    define('CHILD_THEME_NAME', 'Scratch');
    define('CHILD_THEME_URL', 'http://github.com/slick514/scratchTheme');
    define('CHILD_THEME_VERSION', '1.0.0');
    
    // add support for HTML5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
    
    // add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport');
    
    // add accessibility support
    add_theme_support( 'genesis-accessibility', array(
        '404-page',
        'drop-down-menu',
        'headings',
        'rems',
        'search-form',
        'skip-links',
    ));
    
    // add support for (3) footer widgets
    add_theme_support('genesis-footer-widgets', 3);
    
    // Unregister layouts that use 2ry sidebar
    genesis_unregister_layout('content-sidebar-sidebar');
    genesis_unregister_layout('sidebar-content-sidebar');
    genesis_unregister_layout('sidebar-sidebar-content');
}
