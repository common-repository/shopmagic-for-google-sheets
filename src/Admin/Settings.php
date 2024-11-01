<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets\Admin;

use ShopMagicVendor\WPDesk\Forms\Field\ButtonField;
use WPDesk\ShopMagic\Admin\Form\Fields\ActionField;
use ShopMagicVendor\WPDesk\Forms\Field\Header;
use ShopMagicVendor\WPDesk\View\Renderer\Renderer;
use WPDesk\ShopMagic\Admin\Settings\FieldSettingsTab;
use WPDesk\ShopMagic\Components\UrlGenerator\RestUrlGenerator;
use WPDesk\ShopMagicGoogleSheets\Client;

/**
 * Settings tab for Google Sheets data.
 */
final class Settings extends FieldSettingsTab {
	/** @var Renderer */
	private $renderer;

	/** @var RestUrlGenerator */
	private $url_generator;

	public function __construct(
		Renderer $renderer,
		RestUrlGenerator $url_generator
	) {
		$this->renderer      = $renderer;
		$this->url_generator = $url_generator;
	}

	public static function get_tab_slug(): string {
		return 'google-sheets';
	}

	public function get_tab_name(): string {
		return esc_html__( 'Google Sheets', 'shopmagic-for-google-sheets' );
	}

	/** @return \ShopMagicVendor\WPDesk\Forms\Field[] */
	public function get_fields(): array {
		if ( empty( get_option( Client::GOOGLE_ACCESS_TOKEN ) ) ) {
			$fields = [
				( new Header() )
					->set_name( 'header' )
					->set_description(
						esc_html__(
							'Connect ShopMagic to Google Sheets to automatically send data to Google Sheets when users perform actions like submitting forms or making purchases. Turn Google Sheets into a powerful reporting tool for your WordPress site.',
							'shopmagic-for-google-sheets'
						)
					),
				( new ButtonField() )
					->set_name( 'authorize' )
					->set_description( $this->get_login_button() ),
			];
		} else {
			$fields = [
				( new Header() )
					->set_name( 'header' )
					->set_description( esc_html__( 'ShopMagic is connected to Google Sheets!', 'shopmagic-for-google-sheets' ) ),
				( new ActionField() )
					->set_name( 'revoke' )
					->set_label(esc_html__('Disconnect', 'shopmagic-for-google-sheets'))
					->set_callback($this->url_generator->generate('/extensions/sheets/revoke')),
			];
		}

		return $fields;
	}

	private function get_login_button(): string {
		return $this->renderer->render(
			'google_button',
			[ 'authorization_url' => $this->url_generator->generate( '/extensions/sheets/authorize' ) ]
		);
	}
}
