<?php declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets;

use WPDesk\ShopMagic\Components\UrlGenerator\RestUrlGenerator;

class SomeServiceIGuess {

	/** @var ApiMessageDecryptor */
	private $decryptor;

	private const BASE_URL = 'https://api.shopmagic.app/v1/google';

	/** @var RestUrlGenerator */
	private $url_generator;

	public function __construct(
		ApiMessageDecryptor $decryptor,
		RestUrlGenerator $url_generator
	) {
		$this->decryptor     = $decryptor;
		$this->url_generator = $url_generator;
	}

	private function fetch_token(): string {
		$secret = get_transient( 'shopmagic_google_sheets_authorize_nonce' );
		if ( ! is_string( $secret ) || empty( $secret ) ) {
			$secret = wp_create_nonce( 'google_auth' );
			set_transient( 'shopmagic_google_sheets_authorize_nonce', $secret, 3600 );
		}

		return $secret;
	}

	public function build_authorization_url(): string {
		$nonce = $this->fetch_token();
		$query = http_build_query( [
			'redirect_url' => $this->url_generator->generate( '/extensions/sheets/authorize' ),
			'nonce'        => $nonce,
		] );

		return self::BASE_URL . '/preauth?' . $query;
	}

	public function build_refresh_url(): string {
		return self::BASE_URL . '/token';
	}

	public function authorize_with_encrypted_message( string $message ) {
		$secret           = $this->fetch_token();
		$decodedMessage   = $this->decryptor->decode( $message );
		$decryptedMessage = json_decode(
			$this->decryptor->decrypt( $decodedMessage, $secret ),
			true
		);
		update_option( Client::GOOGLE_ACCESS_TOKEN, $decryptedMessage );

		return $decryptedMessage;
	}

}
