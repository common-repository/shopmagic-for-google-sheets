<?php

namespace ShopMagicGoogleSheetsVendor\Psr\Http\Client;

use ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface;
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(\ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface $request) : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface;
}
