<?php

declare( strict_types=1 );

namespace WPDesk\ShopMagicGoogleSheets;

use ShopMagicGoogleSheetsVendor\Google\Client as GoogleClient;
use ShopMagicGoogleSheetsVendor\WPDesk\Notice\Notice;
use ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\AbstractPlugin;
use ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\HookableCollection;
use ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\HookableParent;
use ShopMagicGoogleSheetsVendor\WPDesk_Plugin_Info;
use ShopMagicVendor\DI\ContainerBuilder;
use ShopMagicVendor\WPDesk\View\Renderer\SimplePhpRenderer;
use ShopMagicVendor\WPDesk\View\Resolver\DirResolver;
use WPDesk\ShopMagic\Components\Routing\RestRoutesRegistry;
use WPDesk\ShopMagic\Components\UrlGenerator\RestUrlGenerator;
use WPDesk\ShopMagic\Integration\ExternalPluginsAccess;
use WPDesk\ShopMagicGoogleSheets\Admin\Settings;

final class Plugin extends AbstractPlugin implements HookableCollection {
	use HookableParent;

	public function __construct( WPDesk_Plugin_Info $plugin_info ) {
		/** @noinspection PhpParamsInspection */
		parent::__construct( $plugin_info );

		$this->docs_url    = 'https://docs.shopmagic.app/?utm_source=user-site&utm_medium=quick-link&utm_campaign=docs';
		$this->support_url = 'https://shopmagic.app/support/?utm_source=user-site&utm_medium=quick-link&utm_campaign=support';
	}

	public function hooks() {
		parent::hooks();

		add_action(
			'shopmagic/core/initialized/v2',
			function ( ExternalPluginsAccess $core ) {
				$shopmagic_version = $core->get_version();
				if ( version_compare( $shopmagic_version, '5', '>=' ) ) {
					new Notice(
						sprintf(
						// translators: %s ShopMagic version.
							esc_html__(
								'This version of ShopMagic for Google Sheets plugin is not compatible with ShopMagic %s. Please upgrade ShopMagic for Google Sheets to the newest version.',
								'shopmagic-for-google-sheets'
							),
							$shopmagic_version
						)
					);

					return;
				}

				$container = $core->get_container();
				$logger = $core->get_logger();
				$builder   = new ContainerBuilder();
				$builder->useAutowiring( false );
				$builder->wrapContainer( $container );
				$builder->addDefinitions([
					Client::class => \ShopMagicVendor\DI\autowire(),
				]);
				$phpdiContainer = $builder->build();
				$container->addContainer( $phpdiContainer );

				add_action( 'shopmagic/core/rest/init', function () use ( $container, $core ) {
					$routes              = require $this->plugin_info->get_plugin_dir() . '/config/router.php';
					$routes_configurator = $core->get_routes_configurator();
					$routes( $routes_configurator );
					$registry = RestRoutesRegistry::with_defaults( $routes_configurator, $container );
					$registry->setLogger( $core->get_logger() );
					$registry->hooks();
				} );


				$renderer = new SimplePhpRenderer(
					new DirResolver( $this->plugin_info->get_plugin_dir() . '/templates/admin' )
				);
				$core->append_setting_tab( new Settings( $renderer, new RestUrlGenerator() ) );
				$core->add_extension( new GoogleSheetsExtension( $container ) );
			}
		);
	}
}
