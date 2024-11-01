<?php

namespace ShopMagicGoogleSheetsVendor\Google\AuthHandler;

use ShopMagicGoogleSheetsVendor\Google\Auth\CredentialsLoader;
use ShopMagicGoogleSheetsVendor\Google\Auth\FetchAuthTokenCache;
use ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\HttpHandlerFactory;
use ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\AuthTokenSubscriber;
use ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\ScopedAccessTokenSubscriber;
use ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\SimpleSubscriber;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\Client;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface;
use ShopMagicGoogleSheetsVendor\Psr\Cache\CacheItemPoolInterface;
/**
 * This supports Guzzle 5
 */
class Guzzle5AuthHandler
{
    protected $cache;
    protected $cacheConfig;
    public function __construct(\ShopMagicGoogleSheetsVendor\Psr\Cache\CacheItemPoolInterface $cache = null, array $cacheConfig = [])
    {
        $this->cache = $cache;
        $this->cacheConfig = $cacheConfig;
    }
    public function attachCredentials(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, \ShopMagicGoogleSheetsVendor\Google\Auth\CredentialsLoader $credentials, callable $tokenCallback = null)
    {
        // use the provided cache
        if ($this->cache) {
            $credentials = new \ShopMagicGoogleSheetsVendor\Google\Auth\FetchAuthTokenCache($credentials, $this->cacheConfig, $this->cache);
        }
        return $this->attachCredentialsCache($http, $credentials, $tokenCallback);
    }
    public function attachCredentialsCache(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, \ShopMagicGoogleSheetsVendor\Google\Auth\FetchAuthTokenCache $credentials, callable $tokenCallback = null)
    {
        // if we end up needing to make an HTTP request to retrieve credentials, we
        // can use our existing one, but we need to throw exceptions so the error
        // bubbles up.
        $authHttp = $this->createAuthHttp($http);
        $authHttpHandler = \ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\HttpHandlerFactory::build($authHttp);
        $subscriber = new \ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\AuthTokenSubscriber($credentials, $authHttpHandler, $tokenCallback);
        $http->setDefaultOption('auth', 'google_auth');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachToken(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use($token) {
            return $token['access_token'];
        };
        $subscriber = new \ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\ScopedAccessTokenSubscriber($tokenFunc, $scopes, $this->cacheConfig, $this->cache);
        $http->setDefaultOption('auth', 'scoped');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachKey(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, $key)
    {
        $subscriber = new \ShopMagicGoogleSheetsVendor\Google\Auth\Subscriber\SimpleSubscriber(['key' => $key]);
        $http->setDefaultOption('auth', 'simple');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    private function createAuthHttp(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http)
    {
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client(['base_url' => $http->getBaseUrl(), 'defaults' => ['exceptions' => \true, 'verify' => $http->getDefaultOption('verify'), 'proxy' => $http->getDefaultOption('proxy')]]);
    }
}
