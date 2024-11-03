<?php 

class cyn_rest {
    function __construct() {
		add_action( 'rest_api_init', [ $this, 'register_route' ] );
	}

    public function register_route() {
        register_rest_route(
			'cyn-api/v1',
			'/contact-form',
			[ 
				'methods' => 'POST',
				'callback' => [ $this, 'handle_contact_form' ],
				'permission_callback' => '__return_true'

			]
		);
     }

     public function handle_contact_form( WP_REST_Request $request ) {
        //var_dump($request); //what back from request

        $body = $request->get_body_params();


        $author = sanitize_text_field( $body['author'] );
		$tel = sanitize_text_field( $body['tel'] );
		$comment = sanitize_textarea_field( $body['comment'] );

        $new_post = wp_insert_post( [ 
			'post_type' => CYN_FORM_POST_TYPE,
			'post_title' => $author,
			'post_status' => 'private',
			'meta_input' => [ 
				'_name' => $author,
				'_tel' => $tel,
				'_message' => $comment,
			]
		] );

        if ( is_wp_error( $new_post ) ) {
			return new WP_REST_Response( 'something went wrong!', 500 );
		}


        return new WP_REST_Response( [ 'post-id' => $new_post ] );

     }
}