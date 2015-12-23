<?php

/*
 *  Front page template
 *  
 *  @package     Scratch
 *  @author      Justin Gries
 *  @license     GPL-2.0+
 */

add_action('genesis_meta', 'scratch_home_page_setup');

function scratch_home_page_setup(){
    
    // Define some constants; These should match-up with the ids found 
    // in "includes/widget-areas.php"
    define('HOME_WELCOME_KEY', 'home-welcome');
    define('CALL_TO_ACTION_KEY', 'call-to-action');
    
    // Check the activity of sidebars
    $home_sidebars = array(
        HOME_WELCOME_KEY    => is_active_sidebar(HOME_WELCOME_KEY),
        CALL_TO_ACTION_KEY  => is_active_sidebar(CALL_TO_ACTION_KEY),
    );
    
    // Return early if no sidebars are active
    if(!in_array(true, $home_sidebars)) return;
    
    // If the home-welcome widget is active, display it
    if($home_sidebars[HOME_WELCOME_KEY]){
        add_action('genesis_after_header','scratch_add_home_welcome');
    }
    
    // if the call-to-action widget is active, display it
    if($home_sidebars[CALL_TO_ACTION_KEY]){
        add_action('genesis_after_header','scratch_add_call_to_action');
    }
}

/**
 * Display content for the "Home Welcome" section
 * 
 * @since 1.0.0
 */
function scratch_add_home_welcome(){
    generate_widget_area(HOME_WELCOME_KEY);
}

/**
 * Display content for the "Call to Action" section
 * 
 * @since 1.0.0
 */
function scratch_add_call_to_action(){
    generate_widget_area(CALL_TO_ACTION_KEY);
}

/**
 * Generates a generic div-block for a widget, based off of the widget id
 * 
 * @since 1.0.0
 * @param type $key representing the widget-area name and class
 */
function generate_widget_area($key){
    genesis_widget_area($key,
            array(
                'before'    => '<div class="'.$key.'">'
                . '<div class="wrap"',
                'after'     => '</div></div>',
            ));
}

genesis();