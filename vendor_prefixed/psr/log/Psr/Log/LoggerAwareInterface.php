<?php

namespace ShopMagicGoogleSheetsVendor\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\ShopMagicGoogleSheetsVendor\Psr\Log\LoggerInterface $logger);
}
