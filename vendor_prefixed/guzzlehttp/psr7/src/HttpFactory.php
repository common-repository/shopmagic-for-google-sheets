<?php

declare (strict_types=1);
namespace ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7;

use ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ServerRequestFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\ServerRequestInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\UploadedFileFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\UploadedFileInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\UriFactoryInterface;
use ShopMagicGoogleSheetsVendor\Psr\Http\Message\UriInterface;
/**
 * Implements all of the PSR-17 interfaces.
 *
 * Note: in consuming code it is recommended to require the implemented interfaces
 * and inject the instance of this class multiple times.
 */
final class HttpFactory implements \ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestFactoryInterface, \ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseFactoryInterface, \ShopMagicGoogleSheetsVendor\Psr\Http\Message\ServerRequestFactoryInterface, \ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamFactoryInterface, \ShopMagicGoogleSheetsVendor\Psr\Http\Message\UploadedFileFactoryInterface, \ShopMagicGoogleSheetsVendor\Psr\Http\Message\UriFactoryInterface
{
    public function createUploadedFile(\ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamInterface $stream, ?int $size = null, int $error = \UPLOAD_ERR_OK, ?string $clientFilename = null, ?string $clientMediaType = null) : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\UploadedFileInterface
    {
        if ($size === null) {
            $size = $stream->getSize();
        }
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\UploadedFile($stream, $size, $error, $clientFilename, $clientMediaType);
    }
    public function createStream(string $content = '') : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamInterface
    {
        return \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Utils::streamFor($content);
    }
    public function createStreamFromFile(string $file, string $mode = 'r') : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamInterface
    {
        try {
            $resource = \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Utils::tryFopen($file, $mode);
        } catch (\RuntimeException $e) {
            if ('' === $mode || \false === \in_array($mode[0], ['r', 'w', 'a', 'x', 'c'], \true)) {
                throw new \InvalidArgumentException(\sprintf('Invalid file opening mode "%s"', $mode), 0, $e);
            }
            throw $e;
        }
        return \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Utils::streamFor($resource);
    }
    public function createStreamFromResource($resource) : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\StreamInterface
    {
        return \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Utils::streamFor($resource);
    }
    public function createServerRequest(string $method, $uri, array $serverParams = []) : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\ServerRequestInterface
    {
        if (empty($method)) {
            if (!empty($serverParams['REQUEST_METHOD'])) {
                $method = $serverParams['REQUEST_METHOD'];
            } else {
                throw new \InvalidArgumentException('Cannot determine HTTP method');
            }
        }
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
    public function createResponse(int $code = 200, string $reasonPhrase = '') : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\ResponseInterface
    {
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Response($code, [], null, '1.1', $reasonPhrase);
    }
    public function createRequest(string $method, $uri) : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\RequestInterface
    {
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Request($method, $uri);
    }
    public function createUri(string $uri = '') : \ShopMagicGoogleSheetsVendor\Psr\Http\Message\UriInterface
    {
        return new \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Uri($uri);
    }
}
