<?php

namespace ShopMagicGoogleSheetsVendor\GuzzleHttp;

use ShopMagicGoogleSheetsVendor\Psr\Http\Message\MessageInterface;
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(\ShopMagicGoogleSheetsVendor\Psr\Http\Message\MessageInterface $message) : ?string;
}
