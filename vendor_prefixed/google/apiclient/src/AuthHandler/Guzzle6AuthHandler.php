<?php

namespace ShopMagicGoogleSheetsVendor\Google\AuthHandler;

use ShopMagicGoogleSheetsVendor\Google\Auth\CredentialsLoader;
use ShopMagicGoogleSheetsVendor\Google\Auth\FetchAuthTokenCache;
use ShopMagicGoogleSheetsVendor\Google\Auth\HttpHandler\HttpHandlerFactory;
use ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\AuthTokenMiddleware;
use ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\ScopedAccessTokenMiddleware;
use ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\SimpleMiddleware;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\Client;
use ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface;
use ShopMagicGoogleSheetsVendor\Psr\Cache\CacheItemPoolInterface;
/**
 * This supports Guzzle 6
 */
class Guzzle6AuthHandler
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
        $middleware = new \ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\AuthTokenMiddleware($credentials, $authHttpHandler, $tokenCallback);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'google_auth';
        $http = new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client($config);
        return $http;
    }
    public function attachToken(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use($token) {
            return $token['access_token'];
        };
        $middleware = new \ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\ScopedAccessTokenMiddleware($tokenFunc, $scopes, $this->cacheConfig, $this->cache);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'scoped';
        $http = new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client($config);
        return $http;
    }
    public function attachKey(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http, $key)
    {
        $middleware = new \ShopMagicGoogleSheetsVendor\Google\Auth\Middleware\SimpleMiddleware(['key' => $key]);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'simple';
        $http = new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client($config);
        return $http;
    }
    private function createAuthHttp(\ShopMagicGoogleSheetsVendor\GuzzleHttp\ClientInterface $http)
    {
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Client(['http_errors' => \true] + $http->getConfig());
    }
}
