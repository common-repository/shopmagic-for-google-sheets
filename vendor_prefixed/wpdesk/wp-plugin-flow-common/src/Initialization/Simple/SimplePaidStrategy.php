<?php

namespace ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\Simple;

use ShopMagicGoogleSheetsVendor\WPDesk\Helper\HelperRemover;
use ShopMagicGoogleSheetsVendor\WPDesk\Helper\PrefixedHelperAsLibrary;
use ShopMagicGoogleSheetsVendor\WPDesk\License\PluginRegistrator;
use ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\ActivationTrait;
use ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\BuilderTrait;
use ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\PluginDisablerByFileTrait;
use ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\InitializationStrategy;
use ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\ActivationAware;
use ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\SlimPlugin;
/**
 * Initialize standard paid plugin
 * - register to helper
 * - initialize helper
 * - build with info about plugin active flag
 */
class SimplePaidStrategy implements \ShopMagicGoogleSheetsVendor\WPDesk\Plugin\Flow\Initialization\InitializationStrategy
{
    use TrackerInstanceAsFilterTrait;
    use BuilderTrait;
    /** @var \WPDesk_Plugin_Info */
    private $plugin_info;
    /** @var SlimPlugin */
    private $plugin;
    public function __construct(\ShopMagicGoogleSheetsVendor\WPDesk_Plugin_Info $plugin_info)
    {
        $this->plugin_info = $plugin_info;
    }
    /**
     * Run tasks that prepares plugin to work. Have to run before plugin loaded.
     *
     * @param \WPDesk_Plugin_Info $plugin_info
     *
     * @return SlimPlugin
     */
    public function run_before_init(\ShopMagicGoogleSheetsVendor\WPDesk_Plugin_Info $plugin_info)
    {
        $this->plugin = $this->build_plugin($plugin_info);
        $this->init_register_hooks($plugin_info, $this->plugin);
    }
    /**
     * Run task that integrates plugin with other dependencies. Can be run in plugins_loaded.
     *
     * @param \WPDesk_Plugin_Info $plugin_info
     *
     * @return SlimPlugin
     */
    public function run_init(\ShopMagicGoogleSheetsVendor\WPDesk_Plugin_Info $plugin_info)
    {
        if (!$this->plugin) {
            $this->plugin = $this->build_plugin($plugin_info);
        }
        $this->prepare_tracker_action();
        $registrator = $this->register_plugin();
        \add_action('plugins_loaded', function () use($registrator) {
            $is_plugin_subscription_active = $registrator instanceof \ShopMagicGoogleSheetsVendor\WPDesk\License\PluginRegistrator && $registrator->is_active();
            if ($this->plugin instanceof \ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\ActivationAware && $is_plugin_subscription_active) {
                $this->plugin->set_active();
            }
            $this->store_plugin($this->plugin);
            $this->init_plugin($this->plugin);
            // Flush usage tracker late, to remain backward compatible with plugins which could instantiate
            // the tracker on their own through `wpdesk_tracker_instance` filter.
            $this->get_tracker_instance();
            $this->register_tracker_ui_extensions();
        }, $priority_before_flow_2_5_after_2_6 = -45);
        return $this->plugin;
    }
    /**
     * Register plugin for subscriptions and updates
     *
     * @return PluginRegistrator
     *
     */
    private function register_plugin()
    {
        if (\apply_filters('wpdesk_can_register_plugin', \true, $this->plugin_info)) {
            $registrator = new \ShopMagicGoogleSheetsVendor\WPDesk\License\PluginRegistrator($this->plugin_info);
            $registrator->initialize_license_manager();
            return $registrator;
        }
    }
}
