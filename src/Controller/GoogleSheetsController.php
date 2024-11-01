<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets\Controller;

use ShopMagicVendor\Psr\Log\LoggerInterface;
use WPDesk\ShopMagic\Components\Routing\HttpProblemException;
use WPDesk\ShopMagic\Components\UrlGenerator\AdminUrlGenerator;
use WPDesk\ShopMagicGoogleSheets\Client;
use WPDesk\ShopMagicGoogleSheets\Data\GoogleSheetsService;
use WPDesk\ShopMagicGoogleSheets\SomeServiceIGuess;

/**
 * Retrieve data from Google Sheets API.
 */
final class GoogleSheetsController {

	/** @var Client */
	private $client;

	/** @var GoogleSheetsService */
	private $google_sheets;

	/** @var LoggerInterface */
	private $logger;

	public function __construct( Client $client, GoogleSheetsService $google_sheets, LoggerInterface $logger ) {
		$this->client        = $client;
		$this->google_sheets = $google_sheets;
		$this->logger        = $logger;
	}

	public function revoke_token(): \WP_REST_Response {
		try {
			$this->client->revoke();
			return new \WP_REST_Response( [
				'result' => 'success',
				'message' => esc_html__('Successfully disconnected from Google services. You may log into another account.', 'shopmagic-for-google-sheets'),
			], \WP_Http::ACCEPTED );
		} catch ( \Throwable $e ) {
			$this->logger->warning( sprintf( 'Failed to revoke token: %s', $e->getMessage() ) );
			return new \WP_REST_Response(
				[
					'result' => 'failed',
					'message' => esc_html__('Failed to log out from Google services.', 'shopmagic-for-google-sheets'),
					'details' => $e->getMessage(),
				],
				\WP_Http::UNPROCESSABLE_ENTITY
			);
		}
	}

	public function authorize(
		\WP_REST_Request $request,
		SomeServiceIGuess $service,
		AdminUrlGenerator $url_generator
	): \WP_REST_Response {
		if ( $request->has_param( 'message' ) ) {
			$service->authorize_with_encrypted_message( $request->get_param( 'message' ) );

			return new \WP_REST_Response(
				null,
				\WP_Http::FOUND,
				[
					'Location' => $url_generator->generate( 'admin.php', [
						'page'      => 'shopmagic-admin',
						'_fragment' => '/settings/google-sheets',
					] ),
				]
			);
		}

		return $this->request_authorization( $service );
	}

	private function request_authorization( SomeServiceIGuess $service ): \WP_REST_Response {
		return new \WP_REST_Response(
			null,
			\WP_Http::FOUND,
			[
				'Location' => $service->build_authorization_url(),
			]
		);
	}

	public function get_worksheets( string $sheet_id ): \WP_REST_Response {
		if ( ! current_user_can( 'edit_posts' ) ) {
			return new \WP_REST_Response(
				[
					'error' => esc_html__( 'You are not authorized to access the data.', 'shopmagic-for-google-sheets' ),
				],
				\WP_Http::FORBIDDEN
			);
		}

		try {
			return new \WP_REST_Response(
				[
					'sheet'      => $sheet_id,
					'title'      => $this->google_sheets->get_spreadsheet_title( $sheet_id ),
					'worksheets' => $this->google_sheets->get_worksheets( $sheet_id ),
				]
			);
		} catch ( \ShopMagicGoogleSheetsVendor\Google\Service\Exception $e ) {
			if ( $e->getCode() === 404 ) {
				throw new HttpProblemException(
					[
						'title'  => 'Google Sheets API error',
						'detail' => __( 'File not found', 'shopmagic-for-google-sheets' ),
					],
					404
				);
			}

			$error_message = json_decode( $e->getMessage(), true )['error']['message'];

			throw new HttpProblemException( [
				'title'  => 'Google Sheets API error',
				'detail' => $error_message,
			] );
		}
	}

	public function get_worksheet_header( string $sheet_id, string $worksheet ): \WP_REST_Response {
		if ( ! current_user_can( 'edit_posts' ) ) {
			return new \WP_REST_Response(
				[
					'error' => esc_html__( 'You are not authorized to access the data.', 'shopmagic-for-google-sheets' ),
				],
				\WP_Http::FORBIDDEN
			);
		}

		try {
			return new \WP_REST_Response( $this->google_sheets->get_worksheet_header( $sheet_id, $worksheet ) );
		} catch ( \ShopMagicGoogleSheetsVendor\Google\Service\Exception $e ) {
			$error_message = json_decode( $e->getMessage(), true )['error']['message'];

			throw new HttpProblemException( [
				'title'  => 'Google Sheets API error',
				'detail' => $error_message,
			] );
		}
	}

}
