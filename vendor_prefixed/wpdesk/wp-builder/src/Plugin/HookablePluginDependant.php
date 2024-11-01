<?php

namespace ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin;

interface HookablePluginDependant extends \ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\Hookable
{
    /**
     * Set Plugin.
     *
     * @param AbstractPlugin $plugin Plugin.
     *
     * @return null
     */
    public function set_plugin(\ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Plugin\AbstractPlugin $plugin);
    /**
     * Get plugin.
     *
     * @return AbstractPlugin.
     */
    public function get_plugin();
}
