<?php

class cyn_rest
{
	function __construct()
	{
		add_action('rest_api_init', [$this, 'register_route']);
	}

	public function register_route()
	{

		register_rest_route(
			'cyn-api/v1',
			'/contact-form',
			[
				'methods' => 'POST',
				'callback' => [$this, 'handle_contact_form'],
				'permission_callback' => '__return_true'

			]
		);

		register_rest_route(
			'cyn-api/v1',
			'/price_pop_up',
			[
				'methods' => 'POST',
				'callback' => [$this, 'handle_price_form'],
				'permission_callback' => '__return_true'
			]

		);
	}

	public function handle_contact_form(WP_REST_Request $request)
	{
		//var_dump($request); //what back from request

		$body = $request->get_body_params();


		$author = sanitize_text_field($body['author']);
		$tel = sanitize_text_field($body['tel']);
		$comment = sanitize_textarea_field($body['comment']);

		$new_post = wp_insert_post([
			'post_type' => CYN_FORM_POST_TYPE,
			'post_title' => $author,
			'post_status' => 'private',
			'meta_input' => [
				'_name' => $author,
				'_tel' => $tel,
				'_message' => $comment,
			]
		]);

		if (is_wp_error($new_post)) {
			return new WP_REST_Response('something went wrong!', 500);
		}


		return new WP_REST_Response(['post-id' => $new_post]);

	}


	public function handle_price_form(WP_REST_Request $request)
	{

		$body_params = $request->get_body_params();

		$name = sanitize_text_field($body_params['name']);
		$lastName = sanitize_text_field($body_params['last_name']);
		$services = sanitize_text_field($body_params['services']);
		$phone_number = sanitize_text_field($body_params['phone_number']);
		$message = sanitize_textarea_field($body_params['message']);

		$post_id = wp_insert_post([
			'post_type' => CYN_FORM_POST_TYPE,
			'post_title' => $name . ' ' .  $lastName,
			'post_content' => $phone_number,
			'meta_input' => [
				'_tel' => $phone_number,
				'_services' => $services,
				'_message' => $message,
			]
		]);


		if ($post_id === 0 || is_wp_error($post_id)) {
			$response = new WP_REST_Response(['post_created' => false], 500);
		} else {
			$response = new WP_REST_Response(['post_created' => true, 'post_id' => $post_id], 200);
		}

		return $response;
	}
}