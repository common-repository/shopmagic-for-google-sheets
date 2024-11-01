<?php

namespace ShopMagicGoogleSheetsVendor;

if (\class_exists('ShopMagicGoogleSheetsVendor\\Google_Client', \false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}
$classMap = ['ShopMagicGoogleSheetsVendor\\Google\\Client' => 'Google_Client', 'ShopMagicGoogleSheetsVendor\\Google\\Service' => 'Google_Service', 'ShopMagicGoogleSheetsVendor\\Google\\AccessToken\\Revoke' => 'Google_AccessToken_Revoke', 'ShopMagicGoogleSheetsVendor\\Google\\AccessToken\\Verify' => 'Google_AccessToken_Verify', 'ShopMagicGoogleSheetsVendor\\Google\\Model' => 'Google_Model', 'ShopMagicGoogleSheetsVendor\\Google\\Utils\\UriTemplate' => 'Google_Utils_UriTemplate', 'ShopMagicGoogleSheetsVendor\\Google\\AuthHandler\\Guzzle6AuthHandler' => 'Google_AuthHandler_Guzzle6AuthHandler', 'ShopMagicGoogleSheetsVendor\\Google\\AuthHandler\\Guzzle7AuthHandler' => 'Google_AuthHandler_Guzzle7AuthHandler', 'ShopMagicGoogleSheetsVendor\\Google\\AuthHandler\\Guzzle5AuthHandler' => 'Google_AuthHandler_Guzzle5AuthHandler', 'ShopMagicGoogleSheetsVendor\\Google\\AuthHandler\\AuthHandlerFactory' => 'Google_AuthHandler_AuthHandlerFactory', 'ShopMagicGoogleSheetsVendor\\Google\\Http\\Batch' => 'Google_Http_Batch', 'ShopMagicGoogleSheetsVendor\\Google\\Http\\MediaFileUpload' => 'Google_Http_MediaFileUpload', 'ShopMagicGoogleSheetsVendor\\Google\\Http\\REST' => 'Google_Http_REST', 'ShopMagicGoogleSheetsVendor\\Google\\Task\\Retryable' => 'Google_Task_Retryable', 'ShopMagicGoogleSheetsVendor\\Google\\Task\\Exception' => 'Google_Task_Exception', 'ShopMagicGoogleSheetsVendor\\Google\\Task\\Runner' => 'Google_Task_Runner', 'ShopMagicGoogleSheetsVendor\\Google\\Collection' => 'Google_Collection', 'ShopMagicGoogleSheetsVendor\\Google\\Service\\Exception' => 'Google_Service_Exception', 'ShopMagicGoogleSheetsVendor\\Google\\Service\\Resource' => 'Google_Service_Resource', 'ShopMagicGoogleSheetsVendor\\Google\\Exception' => 'Google_Exception'];
foreach ($classMap as $class => $alias) {
    \class_alias($class, $alias);
}
/**
 * This class needs to be defined explicitly as scripts must be recognized by
 * the autoloader.
 */
class Google_Task_Composer extends \ShopMagicGoogleSheetsVendor\Google\Task\Composer
{
}
/** @phpstan-ignore-next-line */
if (\false) {
    class Google_AccessToken_Revoke extends \ShopMagicGoogleSheetsVendor\Google\AccessToken\Revoke
    {
    }
    class Google_AccessToken_Verify extends \ShopMagicGoogleSheetsVendor\Google\AccessToken\Verify
    {
    }
    class Google_AuthHandler_AuthHandlerFactory extends \ShopMagicGoogleSheetsVendor\Google\AuthHandler\AuthHandlerFactory
    {
    }
    class Google_AuthHandler_Guzzle5AuthHandler extends \ShopMagicGoogleSheetsVendor\Google\AuthHandler\Guzzle5AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle6AuthHandler extends \ShopMagicGoogleSheetsVendor\Google\AuthHandler\Guzzle6AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle7AuthHandler extends \ShopMagicGoogleSheetsVendor\Google\AuthHandler\Guzzle7AuthHandler
    {
    }
    class Google_Client extends \ShopMagicGoogleSheetsVendor\Google\Client
    {
    }
    class Google_Collection extends \ShopMagicGoogleSheetsVendor\Google\Collection
    {
    }
    class Google_Exception extends \ShopMagicGoogleSheetsVendor\Google\Exception
    {
    }
    class Google_Http_Batch extends \ShopMagicGoogleSheetsVendor\Google\Http\Batch
    {
    }
    class Google_Http_MediaFileUpload extends \ShopMagicGoogleSheetsVendor\Google\Http\MediaFileUpload
    {
    }
    class Google_Http_REST extends \ShopMagicGoogleSheetsVendor\Google\Http\REST
    {
    }
    class Google_Model extends \ShopMagicGoogleSheetsVendor\Google\Model
    {
    }
    class Google_Service extends \ShopMagicGoogleSheetsVendor\Google\Service
    {
    }
    class Google_Service_Exception extends \ShopMagicGoogleSheetsVendor\Google\Service\Exception
    {
    }
    class Google_Service_Resource extends \ShopMagicGoogleSheetsVendor\Google\Service\Resource
    {
    }
    class Google_Task_Exception extends \ShopMagicGoogleSheetsVendor\Google\Task\Exception
    {
    }
    interface Google_Task_Retryable extends \ShopMagicGoogleSheetsVendor\Google\Task\Retryable
    {
    }
    class Google_Task_Runner extends \ShopMagicGoogleSheetsVendor\Google\Task\Runner
    {
    }
    class Google_Utils_UriTemplate extends \ShopMagicGoogleSheetsVendor\Google\Utils\UriTemplate
    {
    }
}
