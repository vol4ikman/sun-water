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

if ( ! function_exists('stuff_post_type') ) {

	// Register Custom Post Type
	function stuff_post_type() {
	
		$labels = array(
			'name'                  => _x( 'בעלי תפקידים', 'Post Type General Name', 'sun' ),
			'singular_name'         => _x( 'בעלי תפקידים', 'Post Type Singular Name', 'sun' ),
			'menu_name'             => __( 'בעלי תפקידים', 'sun' ),
			'name_admin_bar'        => __( 'בעלי תפקידים', 'sun' ),
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
			'label'                 => __( 'בעלי תפקידים', 'sun' ),
			'description'           => __( 'בעלי תפקידים', 'sun' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'taxonomies'            => array( 'department' ),
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
		register_post_type( 'stuff', $args );
	
	}
	add_action( 'init', 'stuff_post_type', 0 );
	
}

if ( ! function_exists( 'department_taxonomy' ) ) {

	// Register Custom Taxonomy
	function department_taxonomy() {
	
		$labels = array(
			'name'                       => _x( 'מחלקות', 'Taxonomy General Name', 'sun' ),
			'singular_name'              => _x( 'מחלקה', 'Taxonomy Singular Name', 'sun' ),
			'menu_name'                  => __( 'מחלקה', 'sun' ),
			'all_items'                  => __( 'All Items', 'sun' ),
			'parent_item'                => __( 'Parent Item', 'sun' ),
			'parent_item_colon'          => __( 'Parent Item:', 'sun' ),
			'new_item_name'              => __( 'New Item Name', 'sun' ),
			'add_new_item'               => __( 'Add New Item', 'sun' ),
			'edit_item'                  => __( 'Edit Item', 'sun' ),
			'update_item'                => __( 'Update Item', 'sun' ),
			'view_item'                  => __( 'View Item', 'sun' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'sun' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'sun' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'sun' ),
			'popular_items'              => __( 'Popular Items', 'sun' ),
			'search_items'               => __( 'Search Items', 'sun' ),
			'not_found'                  => __( 'Not Found', 'sun' ),
			'no_terms'                   => __( 'No items', 'sun' ),
			'items_list'                 => __( 'Items list', 'sun' ),
			'items_list_navigation'      => __( 'Items list navigation', 'sun' ),
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
		register_taxonomy( 'department', array( 'stuff' ), $args );
	
	}
	add_action( 'init', 'department_taxonomy', 0 );
	
}

function sun_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Feedback settings', 'hcf' ), 'sun_display_callback', array('post', 'page') );
}
add_action( 'add_meta_boxes', 'sun_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function sun_display_callback( $post ) {

	$user_feedbacks = get_post_meta( $post->ID, 'user_feedbacks', true );
	$total_yes_feedbacks = array();
	$total_no_feedbacks = array();
	?>
	<h3>האם הדף הזה עזר לך?</h3>
	<table class="widefat fixed" cellspacing="0">
		<thead>
			<tr>
				<th id="columnname" class="manage-column column-userip" scope="col">כתובת IP</th>
				<th id="columnname" class="manage-column column-date" scope="col">תאריך</th>
				<th id="columnname" class="manage-column column-useranswer" scope="col">משוב</th>
			</tr>
		</thead>

		<?php if ( $user_feedbacks ) : ?>
			<tbody>
				<?php foreach( $user_feedbacks as $item ) :
					$user_ip         = isset( $item['user_ip'] ) ? $item['user_ip'] : '';
					$user_feedback   = isset( $item['user_feedback'] ) ? $item['user_feedback'] : '';
					$date            = isset( $item['date'] ) ? $item['date'] : '';
					if( $user_feedback === 'כן' ) {
						$total_yes_feedbacks[] = $user_feedback;
					} else {
						$total_no_feedbacks[] = $user_feedback;
					}
				 ?>
					<tr class="alternate">
						<td class="column-userip"><?php echo esc_html($user_ip); ?></td>
						<td class="column-date"><?php echo esc_html($date); ?></td>
						<td class="column-useranswer"><?php echo esc_html($user_feedback); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		<?php endif; ?>		
		
	</table>

	<p>ענו "כן" : <?php echo count($total_yes_feedbacks); ?></p>
	<p>ענו "לא" : <?php echo count($total_no_feedbacks); ?></p>
	<?php
}
