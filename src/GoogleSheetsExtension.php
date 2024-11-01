<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets;

use ShopMagicVendor\Psr\Container\ContainerInterface;
use WPDesk\ShopMagic\Workflow\Extensions\AbstractExtension;
use WPDesk\ShopMagicGoogleSheets\Action\SheetsAddRow;

class GoogleSheetsExtension extends AbstractExtension {

	/** @var ContainerInterface */
	private $container;

	public function __construct( ContainerInterface $container ) {
		$this->container = $container;
	}

	public function get_actions(): array {
		return [ $this->container->get( SheetsAddRow::class ) ];
	}

}
