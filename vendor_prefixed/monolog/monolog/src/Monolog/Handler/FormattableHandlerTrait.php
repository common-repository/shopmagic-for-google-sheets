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

use ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface;
use ShopMagicGoogleSheetsVendor\Monolog\Formatter\LineFormatter;
/**
 * Helper trait for implementing FormattableInterface
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
trait FormattableHandlerTrait
{
    /**
     * @var ?FormatterInterface
     */
    protected $formatter;
    /**
     * {@inheritDoc}
     */
    public function setFormatter(\ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface $formatter) : \ShopMagicGoogleSheetsVendor\Monolog\Handler\HandlerInterface
    {
        $this->formatter = $formatter;
        return $this;
    }
    /**
     * {@inheritDoc}
     */
    public function getFormatter() : \ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface
    {
        if (!$this->formatter) {
            $this->formatter = $this->getDefaultFormatter();
        }
        return $this->formatter;
    }
    /**
     * Gets the default formatter.
     *
     * Overwrite this if the LineFormatter is not a good default for your handler.
     */
    protected function getDefaultFormatter() : \ShopMagicGoogleSheetsVendor\Monolog\Formatter\FormatterInterface
    {
        return new \ShopMagicGoogleSheetsVendor\Monolog\Formatter\LineFormatter();
    }
}
