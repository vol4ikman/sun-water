<?php
/**
 * AJAX functions
 *
 * @package WordPress
 */

add_action('wp_ajax_save_feedback', 'save_feedback');
add_action('wp_ajax_nopriv_save_feedback', 'save_feedback');

function save_feedback(){
	date_default_timezone_set('Asia/Jerusalem');

	$response = array(
		'error' => true,
		'message' => 'תודה על המשוב.'
	);

	$post_id         = isset( $_POST['post_id'] ) ? $_POST['post_id'] : '';
	$user_ip         = sun_get_user_ip();
	$user_feedback   = ( isset( $_POST['feedback'] ) && 'yes' === $_POST['feedback'] ) ? 'כן' : 'לא';
	
	
	$post_feedbacks = get_post_meta( $post_id, 'user_feedbacks', true ) ? get_post_meta( $post_id, 'user_feedbacks', true ) : array();

	$post_feedbacks[] = array(
		'post_id' => $post_id,
		'user_ip' => $user_ip,
		'user_feedback' => $user_feedback,
		'date' => date('d/m/Y H:i:s')
	);

	$update = update_post_meta( $post_id, 'user_feedbacks', $post_feedbacks );
	if( $update ) {
		$response['error'] = false;
	}

	wp_send_json( $response );
}