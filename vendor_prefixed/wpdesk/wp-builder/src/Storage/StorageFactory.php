<?php

namespace ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Storage;

class StorageFactory
{
    /**
     * @return PluginStorage
     */
    public function create_storage()
    {
        return new \ShopMagicGoogleSheetsVendor\WPDesk\PluginBuilder\Storage\WordpressFilterStorage();
    }
}
