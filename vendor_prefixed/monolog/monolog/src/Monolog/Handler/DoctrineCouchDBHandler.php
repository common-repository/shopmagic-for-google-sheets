<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ShopMagicGoogleSheetsVendor\Monolog\Handler;

use ShopMagicGoogleSheetsVendor\Monolog\Logger;
use ShopMagicGoogleSheetsVendor\Monolog\Formatter\NormalizerFormatter;
use ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface;
use ShopMagicGoogleSheetsVendor\Doctrine\CouchDB\CouchDBClient;
/**
 * CouchDB handler for Doctrine CouchDB ODM
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class DoctrineCouchDBHandler extends \ShopMagicGoogleSheetsVendor\Monolog\Handler\AbstractProcessingHandler
{
    /** @var CouchDBClient */
    private $client;
    public function __construct(\ShopMagicGoogleSheetsVendor\Doctrine\CouchDB\CouchDBClient $client, $level = \ShopMagicGoogleSheetsVendor\Monolog\Logger::DEBUG, bool $bubble = \true)
    {
        $this->client = $client;
        parent::__construct($level, $bubble);
    }
    /**
     * {@inheritDoc}
     */
    protected function write(array $record) : void
    {
        $this->client->postDocument($record['formatted']);
    }
    protected function getDefaultFormatter() : \ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface
    {
        return new \ShopMagicGoogleSheetsVendor\Monolog\Formatter\NormalizerFormatter();
    }
}
