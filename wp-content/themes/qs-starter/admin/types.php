<?php
if ( ! function_exists('news_updates_post_type') ) {

	// Register Custom Post Type
	function news_updates_post_type() {
	
		$labels = array(
			'name'                  => _x( 'עדכונים חמים', 'Post Type General Name', 'sun' ),
			'singular_name'         => _x( 'עדכונים חמים', 'Post Type Singular Name', 'sun' ),
			'menu_name'             => __( 'עדכונים חמים', 'sun' ),
			'name_admin_bar'        => __( 'עדכונים חמים', 'sun' ),
			'archives'              => __( 'Item Archives', 'sun' ),
			'attributes'            => __( 'Item Attributes', 'sun' ),
			'parent_item_colon'     => __( 'Parent Item:', 'sun' ),
			'all_items'             => __( 'All Items', 'sun' ),
			'add_new_item'          => __( 'Add New Item', 'sun' ),
			'add_new'               => __( 'Add New', 'sun' ),
			'new_item'              => __( 'New Item', 'sun' ),
			'edit_item'             => __( 'Edit Item', 'sun' ),
			'update_item'           => __( 'Update Item', 'sun' ),
			'view_item'             => __( 'View Item', 'sun' ),
			'view_items'            => __( 'View Items', 'sun' ),
			'search_items'          => __( 'Search Item', 'sun' ),
			'not_found'             => __( 'Not found', 'sun' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sun' ),
			'featured_image'        => __( 'Featured Image', 'sun' ),
			'set_featured_image'    => __( 'Set featured image', 'sun' ),
			'remove_featured_image' => __( 'Remove featured image', 'sun' ),
			'use_featured_image'    => __( 'Use as featured image', 'sun' ),
			'insert_into_item'      => __( 'Insert into item', 'sun' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sun' ),
			'items_list'            => __( 'Items list', 'sun' ),
			'items_list_navigation' => __( 'Items list navigation', 'sun' ),
			'filter_items_list'     => __( 'Filter items list', 'sun' ),
		);
		$args = array(
			'label'                 => __( 'עדכונים חמים', 'sun' ),
			'description'           => __( 'עדכונים חמים', 'sun' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'page-attributes' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'news', $args );
	
	}
	add_action( 'init', 'news_updates_post_type', 0 );
	
}

if ( ! function_exists('faq_post_type') ) {

	function faq_post_type() {
	
		$labels = array(
			'name'                  => _x( 'שאלות ותשובות', 'Post Type General Name', 'sun' ),
			'singular_name'         => _x( 'שאלות ותשובות', 'Post Type Singular Name', 'sun' ),
			'menu_name'             => __( 'שאלות ותשובות', 'sun' ),
			'name_admin_bar'        => __( 'שאלות ותשובות', 'sun' ),
			'archives'              => __( 'Item Archives', 'sun' ),
			'attributes'            => __( 'Item Attributes', 'sun' ),
			'parent_item_colon'     => __( 'Parent Item:', 'sun' ),
			'all_items'             => __( 'All Items', 'sun' ),
			'add_new_item'          => __( 'Add New Item', 'sun' ),
			'add_new'               => __( 'Add New', 'sun' ),
			'new_item'              => __( 'New Item', 'sun' ),
			'edit_item'             => __( 'Edit Item', 'sun' ),
			'update_item'           => __( 'Update Item', 'sun' ),
			'view_item'             => __( 'View Item', 'sun' ),
			'view_items'            => __( 'View Items', 'sun' ),
			'search_items'          => __( 'Search Item', 'sun' ),
			'not_found'             => __( 'Not found', 'sun' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sun' ),
			'featured_image'        => __( 'Featured Image', 'sun' ),
			'set_featured_image'    => __( 'Set featured image', 'sun' ),
			'remove_featured_image' => __( 'Remove featured image', 'sun' ),
			'use_featured_image'    => __( 'Use as featured image', 'sun' ),
			'insert_into_item'      => __( 'Insert into item', 'sun' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sun' ),
			'items_list'            => __( 'Items list', 'sun' ),
			'items_list_navigation' => __( 'Items list navigation', 'sun' ),
			'filter_items_list'     => __( 'Filter items list', 'sun' ),
		);
		$args = array(
			'label'                 => __( 'שאלות ותשובות', 'sun' ),
			'description'           => __( 'שאלות ותשובות', 'sun' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-welcome-view-site',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'faq', $args );
	
	}
	add_action( 'init', 'faq_post_type', 0 );
	
}