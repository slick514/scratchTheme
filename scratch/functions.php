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
 */
function scratch_setup(){
    
}
?>