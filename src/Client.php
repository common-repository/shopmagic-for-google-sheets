<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets;

use InvalidArgumentException;
use ShopMagicGoogleSheetsVendor\Google\Client as GoogleClient;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\Client as HttpClient;
use WPDesk\ShopMagicGoogleSheets\Exceptions\AuthentincationException;
use WPDesk\ShopMagicGoogleSheets\Exceptions\AuthorizationException;
use WPDesk\ShopMagic\Helper\RestRequestUtil;

/**
 * Setup and authorize client able to make requests.
 */
final class Client {

	const GOOGLE_ACCESS_TOKEN = 'shopmagic_google_token';

	/** @var GoogleClient */
	private $client;

	/** @var HttpClient */
	private $http_client;

	/** @var SomeServiceIGuess */
	private $service;

	public function __construct(
		GoogleClient $client,
		HttpClient $http_client,
		SomeServiceIGuess $service
	) {
		$this->http_client = $http_client;
		$this->client      = $client;
		$this->service     = $service;
	}

	/** @throws AuthorizationException */
	public function authorize(): void {
		try {
			$this->client->setAccessToken( get_option( self::GOOGLE_ACCESS_TOKEN ) );
		} catch ( InvalidArgumentException $e ) {
			$response = $this->http_client->get( $this->service->build_authorization_url() );
			$token = get_option( self::GOOGLE_ACCESS_TOKEN );
		}

		if ( $this->client->isAccessTokenExpired() ) {
			$this->refresh_token();
		}
	}

	/** @throws AuthentincationException */
	public function authenticate( string $auth_code ): void {
		if ( empty( $auth_code ) ) {
			update_option( self::GOOGLE_ACCESS_TOKEN, '' );

			return;
		}

		$token = $this->client->fetchAccessTokenWithAuthCode( $auth_code );

		if ( array_key_exists( 'error', $token ) ) {
			throw new AuthentincationException(
				esc_html__(
					'You are not authenticated to use Google Sheets data. Try to log into Google services with another account.',
					'shopmagic-for-google-sheets'
				)
			);
		}

		update_option( self::GOOGLE_ACCESS_TOKEN, $token );
	}

	/**
	 * @throws AuthorizationException
	 */
	private function refresh_token(): void {
		try {
			$response = $this->http_client->post(
				$this->service->build_refresh_url(),
				[ 'form_params' => ['redirect_url' => RestRequestUtil::get_url( '/extensions/sheets/authorize' ) ] ]
			);
			$this->client->setAccessToken( $response->getBody()->getContents() );
		} catch ( \Exception $e ) {
			throw new AuthorizationException( esc_html__( 'Could not successfully connect to Google APIs. Try to log out from Google services and log in again.',
				'shopmagic-for-google-sheets' ) );
		}

		$token = $this->client->getAccessToken();
		if ( array_key_exists( 'error', $token ) ) {
			throw new AuthorizationException( esc_html__( 'You are not authorized to save data. Possibly, your token have expired - try to log in again in Settings tab.',
				'shopmagic-for-google-sheets' ) );
		}

		update_option( self::GOOGLE_ACCESS_TOKEN, $token );
	}

	public function get_client(): GoogleClient {
		return $this->client;
	}

	public function revoke(): void {
		try {
			$this->http_client->post(
				'https://api.shopmagic.app/v1/google/revoke',
				[ 'form_params' => ['redirect_url' => RestRequestUtil::get_url( '/extensions/sheets/authorize' ) ] ]
			);
		} finally {
			// We delete token from database either way.
			delete_option( self::GOOGLE_ACCESS_TOKEN );
		}
	}

}
