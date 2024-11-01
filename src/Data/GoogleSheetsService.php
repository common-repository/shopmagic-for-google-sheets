<?php
declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets\Data;

use ShopMagicGoogleSheetsVendor\Google\Service\Sheets;
use WPDesk\ShopMagicGoogleSheets\Client;

class GoogleSheetsService {

	/** @var Client */
	private $client;

	/** @var Sheets */
	private $service;

	public function __construct( Client $client ) {
		$this->client = $client;
	}

	/**
	 * @param string $sheet_id
	 *
	 * @return string[] Worksheet names (those are used as reference when adding rows)
	 */
	public function get_worksheets( string $sheet_id ): array {
		$this->client->authorize();
		$this->service = new Sheets( $this->client->get_client() );

		return $this->get_worksheets_list( $sheet_id );
	}

	private function get_worksheets_list( string $sheet_id ): array {
		return array_map(
			static function ( Sheets\Sheet $sheet ): string {
				return $sheet->getProperties()->getTitle();
			},
			$this->service->spreadsheets->get( $sheet_id )->getSheets()
		);
	}

	/**
	 * @param string $sheet_id
	 * @param string $worksheet
	 *
	 * @return string[] Header row
	 */
	public function get_worksheet_header( string $sheet_id, string $worksheet ): array {
		$this->client->authorize();
		$this->service = new Sheets( $this->client->get_client() );

		$response = $this->service->spreadsheets_values->get( $sheet_id, $worksheet );

		[ $header ] = $response;

		return $header;
	}

	public function get_spreadsheet_title( string $sheet_id ): string {
		$this->client->authorize();
		$this->service = new Sheets( $this->client->get_client() );

		$response = $this->service->spreadsheets->get( $sheet_id );

		return $response->getProperties()->getTitle();
	}
}
