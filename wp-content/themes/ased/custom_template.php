<?php
/**
 * This file adds the Custom Landing template to the Metro Theme.
 *
 * @author Inbound 
 * @package Generate
 * @subpackage Customizations
 */

/*
Template Name: Fullwidth
*/

// Add custom body class to the head
add_filter( 'body_class', 'metro_add_body_class' );
function metro_add_body_class( $classes ) {
   $classes[] = 'fullwidth-content';
   return $classes;
}

// Remove header, navigation, breadcrumbs, footer widgets, footer 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action( 'genesis_before', 'genesis_do_subnav' );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_after_content', 'zzp_site_inner_markup_close' );
remove_action( 'genesis_before_content', 'zzp_site_inner_markup_open' );


genesis();