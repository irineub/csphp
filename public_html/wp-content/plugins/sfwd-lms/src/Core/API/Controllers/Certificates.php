<?php
/**
 * LearnDash API Controller class for LD Certificates.
 *
 * @since 4.10.2
 *
 * @package LearnDash\Core
 */

namespace LearnDash\Core\API\Controllers;

use WP_Error;
use WP_REST_Request;

/**
 * LD Certificates API controller class.
 *
 * @since 4.10.2
 */
class Certificates extends Posts {
	/**
	 * Checks if a given request has access to read a post.
	 * We override this method to implement our own permissions check.
	 *
	 * @since 4.10.2
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 *
	 * @return bool|WP_Error True if the request has read access for the item, WP_Error object or false otherwise.
	 */
	public function get_item_permissions_check( $request ) {
		// Only admins can read certificates.

		if ( ! learndash_is_admin_user( get_current_user_id() ) ) {
			return new WP_Error(
				'learndash_rest_forbidden_context',
				__( 'Sorry, you are not allowed to read this certificate.', 'learndash' ),
				[ 'status' => rest_authorization_required_code() ]
			);
		}

		return parent::get_item_permissions_check( $request );
	}

	/**
	 * Checks if a given request has access to read posts.
	 * We override this method to implement our own permissions check.
	 *
	 * @since 4.10.2
	 *
	 * @param WP_REST_Request $request Full details about the request.
	 *
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
	 */
	public function get_items_permissions_check( $request ) {
		// Only admins can read certificates.

		if ( ! learndash_is_admin_user( get_current_user_id() ) ) {
			return new WP_Error(
				'learndash_rest_forbidden_context',
				__( 'Sorry, you are not allowed to read this certificate.', 'learndash' ),
				[ 'status' => rest_authorization_required_code() ]
			);
		}

		return parent::get_items_permissions_check( $request );
	}
}
