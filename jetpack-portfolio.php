<?php

/**
 * This file adds the Portfolio page template to the No Sidebar Pro Theme.
 *
 * @author Murray AC
 * @package No Sidebar Pro Theme
 * @subpackage Customizations
 */
	
/*
* Template Name: Portfolio
*/

remove_action( 'genesis_loop', 'genesis_do_loop' );
 
add_action( 'genesis_loop', 'custom_do_loop' );
function custom_do_loop() {
    global $paged;
    $args = array(
        'post_type' => 'jetpack-portfolio',
        'order' => 'DESC',
        'posts_per_page' => 4
    );
    genesis_custom_loop($args);
}

genesis();
