<?php

namespace ShopMagicGoogleSheetsVendor\GuzzleHttp;

use ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface;
interface MessageFormatterInterface
{
    /**
     * Returns a formatted message string.
     *
     * @param RequestInterface       $request  Request that was sent
     * @param ResponseInterface|null $response Response that was received
     * @param \Throwable|null        $error    Exception that was received
     */
    public function format(\ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface $request, ?\ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface $response = null, ?\Throwable $error = null) : string;
}
