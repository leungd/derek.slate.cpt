<?php
/*
Plugin Name: ULM Custom Post Types
Description: Custom Post Types for the Umbrella Legal Marketing websites.
Author: Derek Leung
Author URI: http://derekleung.ca/
Version: 1.0.0
*/

add_action( 'init', 'ulm_cpt' );

function ulm_cpt() {
	register_post_type( 'lawyers', array(
	  'labels' => array(
	    'name'                => __( 'Lawyers', 'ulm' ),
	    'singular_name'       => __( 'Lawyer', 'ulm' ),
	    'menu_name'           => __( 'Lawyers', 'ulm' ),
		'parent_item_colon'   => __( 'Parent Lawyer', 'ulm' ),
		'all_items'           => __( 'All Lawyers', 'ulm' ),
		'view_item'           => __( 'View Lawyer', 'ulm' ),
		'add_new_item'        => __( 'Add New Lawyer', 'ulm' ),
		'add_new'             => __( 'Add New', 'ulm' ),
		'edit_item'           => __( 'Edit Lawyer', 'ulm' ),
		'update_item'         => __( 'Update Lawyer', 'ulm' ),
		'search_items'        => __( 'Search Lawyer', 'ulm' ),
		'not_found'           => __( 'Not Found', 'ulm' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ulm' ),
	   ),
	  'has_archive' => true,
	  'description' => 'Lawyers that work for this firm.',
	  'public' => true,
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-businessman',
	  'supports' => array( 'title' )
	));
	register_post_type( 'services', array(
	  'labels' => array(
	    'name'                => __( 'Service', 'ulm' ),
	    'singular_name'       => __( 'Service', 'ulm' ),
	    'menu_name'           => __( 'Services', 'ulm' ),
		'parent_item_colon'   => __( 'Parent Service', 'ulm' ),
		'all_items'           => __( 'All Services', 'ulm' ),
		'view_item'           => __( 'View Service', 'ulm' ),
		'add_new_item'        => __( 'Add New Service', 'ulm' ),
		'add_new'             => __( 'Add New', 'ulm' ),
		'edit_item'           => __( 'Edit Service', 'ulm' ),
		'update_item'         => __( 'Update Service', 'ulm' ),
		'search_items'        => __( 'Search Service', 'ulm' ),
		'not_found'           => __( 'Not Found', 'ulm' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ulm' ),
	   ),
	  'has_archive' => true,
	  'description' => 'Services this firm provides.',
	  'public' => true,
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-book-alt',
	  'supports' => array( 'title', 'editor', 'thumbnail' )
	));
}