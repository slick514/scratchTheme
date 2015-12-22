<?php
/*
 *  Register widget areas
 *  
 *  @package     Scratch
 *  @author      Justin Gries
 *  @license     GPL-2.0+
 */

genesis_register_sidebar( array(
        'id'            => 'home-welcome',
        'name'          => __( 'Home Welcome', CHILD_THEME_NAME ),
        'description'   => __( 'This is a home widget area that will show '
                . 'on the front page', CHILD_THEME_NAME ),
));

genesis_register_sidebar( array(
        'id'            => 'call-to-action',
        'name'          => __( 'Call to Action', CHILD_THEME_NAME ),
        'description'   => __( 'This is a call-to-action widget area that will show '
                . 'on the front page', CHILD_THEME_NAME ),
));

