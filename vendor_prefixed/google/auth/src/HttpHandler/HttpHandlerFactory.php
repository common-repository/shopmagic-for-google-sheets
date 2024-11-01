<?php

/**
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler;

use ShopMagicGoogleSheetsVendor\GuzzleHttp\BodySummarizer;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\Client;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\HandlerStack;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\Middleware;
class HttpHandlerFactory
{
    /**
     * Builds out a default http handler for the installed version of guzzle.
     *
     * @param ClientInterface $client
     * @return Guzzle5HttpHandler|Guzzle6HttpHandler|Guzzle7HttpHandler
     * @throws \Exception
     */
    public static function build(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $client = null)
    {
        if (\is_null($client)) {
            $stack = null;
            if (\class_exists(\ShopMagicGoogleSheetsVendor\GuzzleHttp\BodySummarizer::class)) {
                // double the # of characters before truncation by default
                $bodySummarizer = new \ShopMagicGoogleSheetsVendor\GuzzleHttp\BodySummarizer(240);
                $stack = \ShopMagicGoogleSheetsVendor\GuzzleHttp\HandlerStack::create();
                $stack->remove('http_errors');
                $stack->unshift(\ShopMagicGoogleSheetsVendor\GuzzleHttp\Middleware::httpErrors($bodySummarizer), 'http_errors');
            }
            $client = new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client(['handler' => $stack]);
        }
        $version = null;
        if (\defined('ShopMagicGoogleSheetsVendor\\GuzzleHttp\\ClientInterface::MAJOR_VERSION')) {
            $version = \ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface::MAJOR_VERSION;
        } elseif (\defined('ShopMagicGoogleSheetsVendor\\GuzzleHttp\\ClientInterface::VERSION')) {
            $version = (int) \substr(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface::VERSION, 0, 1);
        }
        switch ($version) {
            case 5:
                return new \ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\Guzzle5HttpHandler($client);
            case 6:
                return new \ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\Guzzle6HttpHandler($client);
            case 7:
                return new \ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\Guzzle7HttpHandler($client);
            default:
                throw new \Exception('Version not supported');
        }
    }
}
