<?php

// Register EventType Custom Taxonomy
function customTaxonomy() {

	$labels = array(
		'name'                       => _x( 'Event Type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Event Types', 'text_domain' ),
		'all_items'                  => __( 'All Event Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Event Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Event Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Event Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Event Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Event Type', 'text_domain' ),
		'update_item'                => __( 'Update Event Type', 'text_domain' ),
		'view_item'                  => __( 'View Event Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Event Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Event Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Event Types', 'text_domain' ),
		'search_items'               => __( 'Search Event Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Event Types', 'text_domain' ),
		'items_list'                 => __( 'Event Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Event Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'eventType', array( 'event' ), $args );

}
add_action( 'init', 'customTaxonomy', 0 );

// Displays Event Types list as radio buttons instead of checkboxes
// This allows only one event type to be selected at a time. Kind of hacky, but it works.
function checktoradio(){
    echo '<script type="text/javascript">jQuery("#eventTypechecklist-pop input, #eventTypechecklist input, .cat-checklist input").each(function(){this.type="radio"});</script>';
}
add_action('admin_footer', 'checktoradio');
