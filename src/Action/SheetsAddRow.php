<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets\Action;

use ShopMagicGoogleSheetsVendor\Google\Service\Sheets;
use ShopMagicVendor\WPDesk\Forms\Field\Paragraph;
use WPDesk\ShopMagic\Admin\Form\FieldsCollection;
use WPDesk\ShopMagic\FormField\Field\CheckboxField;
use WPDesk\ShopMagic\FormField\Field\InputTextField;
use WPDesk\ShopMagic\FormField\Field\MultipleInputTextField;
use WPDesk\ShopMagic\FormField\Field\SelectField;
use WPDesk\ShopMagic\Workflow\Action\Action;
use WPDesk\ShopMagic\Workflow\Event\DataLayer;
use WPDesk\ShopMagicGoogleSheets\Client;
use WPDesk\ShopMagicGoogleSheets\Data\GoogleSheetsService;

/**
 * Action handling adding data to Google Sheets.
 */
final class SheetsAddRow extends Action {
	const SPREADSHEET     = 'spreadsheet';
	const SPREADSHEET_TAB = 'spreadsheet_tab';
	const VALUES          = 'values';
	const USE_HEADER      = 'use_header';

	/** @var Client */
	private $client;

	/** @var GoogleSheetsService */
	private $google_sheets;

	public function __construct( Client $client, GoogleSheetsService $google_sheets ) {
		$this->client        = $client;
		$this->google_sheets = $google_sheets;
	}

	public function get_id(): string {
		return 'shopmagic_add_sheets_row';
	}

	public function get_name(): string {
		return esc_html__( 'Add row to Google Sheets', 'shopmagic-for-google-sheets' );
	}

	public function get_description(): string {
		return esc_html__( "Send data from your website to Google worksheet columns.", 'shopmagic-for-google-sheets' );
	}

	public function execute( DataLayer $resources ): bool {
		try {
			$this->client->authorize();
			$service = new Sheets( $this->client->get_client() );

			$service->spreadsheets_values->append(
				$this->fields_data->get( self::SPREADSHEET ),
				$this->fields_data->get( self::SPREADSHEET_TAB ),
				new Sheets\ValueRange(
					[
						'values' => [ $this->get_values() ],
					]
				),
				[
					'valueInputOption' => 'USER_ENTERED',
					'insertDataOption' => 'INSERT_ROWS',
				]
			);

			return true;
		} catch ( \Exception $e ) {
			$this->logger->alert( $e->getMessage() );

			return false;
		}
	}

	/** @return string[] */
	private function get_values(): array {
		$processor = $this->placeholder_processor;

		return array_map(
			static function ( $value ) use ( $processor ) {
				return $processor->process( (string) $value );
			},
			$this->fields_data->get( self::VALUES )
		);
	}

	public function get_required_data_domains(): array {
		return [];
	}

	/** @return \ShopMagicVendor\WPDesk\Forms\Field[] */
	public function get_fields(): array {
		return array_merge(
			parent::get_fields(),
			[
				( new FieldsCollection(
					[
						( new InputTextField() )
							->set_name( self::SPREADSHEET )
							->set_label( esc_html__( 'Spreadsheet', 'shopmagic-for-google-sheets' ) ),
						( new InputTextField() )
							->set_name( self::SPREADSHEET_TAB )
							->set_type( 'google-worksheets' )
							->set_disabled()
							->set_label( esc_html__( 'Spreadsheet Tab', 'shopmagic-for-google-sheets' ) ),
						( new CheckboxField() )
							->set_name( self::USE_HEADER )
							->set_label( esc_html__( 'Is first row a header?', 'shopmagic-for-google-sheets' ) )
							->set_disabled(),
						( new MultipleInputTextField() )
							->set_disabled()
							->set_name( self::VALUES ),
					]
				) )
					->set_name( 'google_sheets' )
					->set_type( 'google-sheets' ),
			]
		);
	}
}
