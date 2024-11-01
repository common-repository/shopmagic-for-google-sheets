<?php

use WPDesk\ShopMagic\Components\Routing\Argument;
use WPDesk\ShopMagic\Components\Routing\ArgumentCollection;
use WPDesk\ShopMagicGoogleSheets\Controller\GoogleSheetsController;

return static function (\WPDesk\ShopMagic\Components\Routing\RoutesConfigurator $routes) {
	$routes->add( '/extensions/sheets/authorize' )
	       ->methods( 'GET' )
	       ->authorize( '__return_true' )
	       ->controller( [ GoogleSheetsController::class, 'authorize' ] );

	$routes->add( '/extensions/sheets/revoke' )
	       ->methods( ['POST', 'GET'] )
	       ->authorize('__return_true')
	       ->controller( [ GoogleSheetsController::class, 'revoke_token' ] );

	$routes->add( '/extensions/sheets/(?P<sheet_id>[\S]+)/worksheets' )
	       ->methods( 'GET' )
	       ->args( new ArgumentCollection(
		       ( new Argument( 'sheet_id' ) )
			       ->required()
	       ) )
	       ->controller( [ GoogleSheetsController::class, 'get_worksheets' ] );

	$routes->add( '/extensions/sheets/(?P<sheet_id>[\S]+)/worksheets/(?P<worksheet>[\S]+)' )
	       ->methods( 'GET' )
	       ->args( new ArgumentCollection(
		       ( new Argument( 'sheet_id' ) )
			       ->required(),
		       ( new Argument( 'worksheet' ) )
			       ->required()
	       ) )
	       ->controller( [ GoogleSheetsController::class, 'get_worksheet_header' ] );
};
