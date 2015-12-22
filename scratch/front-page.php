<?php

/*
 *  Front page template
 *  
 *  @package     Scratch
 *  @author      Justin Gries
 *  @license     GPL-2.0+
 */

function scratch_home_page_setup(){
    define('HOME_WELCOME_KEY', 'home_welcome');
    define('CALL_TO_ACTION_KEY', 'call_to_action');
    
    // Check the activity of sidebars
    $home_sidebars = array(
        HOME_WELCOME_KEY    => is_active_sidebar('home-welcome'),
        CALL_TO_ACTION_KEY  => is_active_sidebar('call-to-action'),
    );
    
    // Return early if no sidebars are active
    if(!in_array(true, $home_sidebars)) return;
    
    // If the home-welcome widget is active, display it
    if($home_sidebars[HOME_WELCOME_KEY]){
        
    }
    
    // if the call-to-action widget is active, display it
    if($home_sidebars[CALL_TO_ACTION_KEY]){
        
    }
}

genesis();