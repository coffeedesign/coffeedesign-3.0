<?php

// Register Custom Post Type
function sponsorPostType() {

	$labels = array(
		'name'                  => _x( 'Sponsors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sponsors', 'text_domain' ),
		'name_admin_bar'        => __( 'Sponsors', 'text_domain' ),
		'archives'              => __( 'Sponsors Archive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Sponsor:', 'text_domain' ),
		'all_items'             => __( 'All Sponsors', 'text_domain' ),
		'add_new_item'          => __( 'Add New Sponsor', 'text_domain' ),
		'add_new'               => __( 'Add Sponsor', 'text_domain' ),
		'new_item'              => __( 'New Sponsor', 'text_domain' ),
		'edit_item'             => __( 'Edit Sponsor', 'text_domain' ),
		'update_item'           => __( 'Update Sponsor', 'text_domain' ),
		'view_item'             => __( 'View Sponsor', 'text_domain' ),
		'search_items'          => __( 'Search Sponsors', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Sponsor Logo', 'text_domain' ),
		'set_featured_image'    => __( 'Set Sponsor logo', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Sponsor logo', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Sponsor logo', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Sponsor', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sponsor', 'text_domain' ),
		'items_list'            => __( 'Sponsors list', 'text_domain' ),
		'items_list_navigation' => __( 'Sponsors list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Sponsors list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Sponsor', 'text_domain' ),
		'description'           => __( 'Annual and event-level sponsors.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		// 'taxonomies'            => array( 'eventType' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'sponsor', $args );

}

add_action( 'init', 'sponsorPostType', 0 );
