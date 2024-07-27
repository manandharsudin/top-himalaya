<?php
/**
 * Trip Custom Post Type
 *
*/

// Register Custom Post Type
function top_himalaya_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Trips', 'Post Type General Name', 'top-himalaya' ),
		'singular_name'         => _x( 'Trip', 'Post Type Singular Name', 'top-himalaya' ),
		'menu_name'             => __( 'Trips', 'top-himalaya' ),
		'name_admin_bar'        => __( 'Trip', 'top-himalaya' ),
		'archives'              => __( 'Item Archives', 'top-himalaya' ),
		'attributes'            => __( 'Item Attributes', 'top-himalaya' ),
		'parent_item_colon'     => __( 'Parent Item:', 'top-himalaya' ),
		'all_items'             => __( 'All Items', 'top-himalaya' ),
		'add_new_item'          => __( 'Add New Item', 'top-himalaya' ),
		'add_new'               => __( 'Add New', 'top-himalaya' ),
		'new_item'              => __( 'New Item', 'top-himalaya' ),
		'edit_item'             => __( 'Edit Item', 'top-himalaya' ),
		'update_item'           => __( 'Update Item', 'top-himalaya' ),
		'view_item'             => __( 'View Item', 'top-himalaya' ),
		'view_items'            => __( 'View Items', 'top-himalaya' ),
		'search_items'          => __( 'Search Item', 'top-himalaya' ),
		'not_found'             => __( 'Not found', 'top-himalaya' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'top-himalaya' ),
		'featured_image'        => __( 'Featured Image', 'top-himalaya' ),
		'set_featured_image'    => __( 'Set featured image', 'top-himalaya' ),
		'remove_featured_image' => __( 'Remove featured image', 'top-himalaya' ),
		'use_featured_image'    => __( 'Use as featured image', 'top-himalaya' ),
		'insert_into_item'      => __( 'Insert into item', 'top-himalaya' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'top-himalaya' ),
		'items_list'            => __( 'Items list', 'top-himalaya' ),
		'items_list_navigation' => __( 'Items list navigation', 'top-himalaya' ),
		'filter_items_list'     => __( 'Filter items list', 'top-himalaya' ),
	);
	$args = array(
		'label'                 => __( 'Trip', 'top-himalaya' ),
		'description'           => __( 'Custom Post Type fro Trip.', 'top-himalaya' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trip', $args );

}
add_action( 'init', 'top_himalaya_custom_post_type', 0 );

// Register Custom Taxonomy
function top_himalaya_trip_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Trip Types', 'Taxonomy General Name', 'top-himalaya' ),
		'singular_name'              => _x( 'Trip Type', 'Taxonomy Singular Name', 'top-himalaya' ),
		'menu_name'                  => __( 'Trip Type', 'top-himalaya' ),
		'all_items'                  => __( 'All Items', 'top-himalaya' ),
		'parent_item'                => __( 'Parent Item', 'top-himalaya' ),
		'parent_item_colon'          => __( 'Parent Item:', 'top-himalaya' ),
		'new_item_name'              => __( 'New Item Name', 'top-himalaya' ),
		'add_new_item'               => __( 'Add New Item', 'top-himalaya' ),
		'edit_item'                  => __( 'Edit Item', 'top-himalaya' ),
		'update_item'                => __( 'Update Item', 'top-himalaya' ),
		'view_item'                  => __( 'View Item', 'top-himalaya' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'top-himalaya' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'top-himalaya' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'top-himalaya' ),
		'popular_items'              => __( 'Popular Items', 'top-himalaya' ),
		'search_items'               => __( 'Search Items', 'top-himalaya' ),
		'not_found'                  => __( 'Not Found', 'top-himalaya' ),
		'no_terms'                   => __( 'No items', 'top-himalaya' ),
		'items_list'                 => __( 'Items list', 'top-himalaya' ),
		'items_list_navigation'      => __( 'Items list navigation', 'top-himalaya' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'trip-type', array( 'trip' ), $args );

}
add_action( 'init', 'top_himalaya_trip_taxonomy', 0 );

// Register Custom Post Type
function top_himalaya_training_post_type() {

	$labels = array(
		'name'                  => _x( 'Trainings', 'Post Type General Name', 'top-himalaya' ),
		'singular_name'         => _x( 'Training', 'Post Type Singular Name', 'top-himalaya' ),
		'menu_name'             => __( 'Trainings', 'top-himalaya' ),
		'name_admin_bar'        => __( 'Training', 'top-himalaya' ),
		'archives'              => __( 'Item Archives', 'top-himalaya' ),
		'attributes'            => __( 'Item Attributes', 'top-himalaya' ),
		'parent_item_colon'     => __( 'Parent Item:', 'top-himalaya' ),
		'all_items'             => __( 'All Items', 'top-himalaya' ),
		'add_new_item'          => __( 'Add New Item', 'top-himalaya' ),
		'add_new'               => __( 'Add New', 'top-himalaya' ),
		'new_item'              => __( 'New Item', 'top-himalaya' ),
		'edit_item'             => __( 'Edit Item', 'top-himalaya' ),
		'update_item'           => __( 'Update Item', 'top-himalaya' ),
		'view_item'             => __( 'View Item', 'top-himalaya' ),
		'view_items'            => __( 'View Items', 'top-himalaya' ),
		'search_items'          => __( 'Search Item', 'top-himalaya' ),
		'not_found'             => __( 'Not found', 'top-himalaya' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'top-himalaya' ),
		'featured_image'        => __( 'Featured Image', 'top-himalaya' ),
		'set_featured_image'    => __( 'Set featured image', 'top-himalaya' ),
		'remove_featured_image' => __( 'Remove featured image', 'top-himalaya' ),
		'use_featured_image'    => __( 'Use as featured image', 'top-himalaya' ),
		'insert_into_item'      => __( 'Insert into item', 'top-himalaya' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'top-himalaya' ),
		'items_list'            => __( 'Items list', 'top-himalaya' ),
		'items_list_navigation' => __( 'Items list navigation', 'top-himalaya' ),
		'filter_items_list'     => __( 'Filter items list', 'top-himalaya' ),
	);
	$args = array(
		'label'                 => __( 'Training', 'top-himalaya' ),
		'description'           => __( 'Training Post Type', 'top-himalaya' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'training', $args );

}
add_action( 'init', 'top_himalaya_training_post_type', 0 );