<?php

namespace ShopMagicGoogleSheetsVendor\GuzzleHttp;

use ShopMagicGoogleSheetsVendor\Psr\Http\Message\MessageInterface;
final class BodySummarizer implements \ShopMagicGoogleSheetsVendor\GuzzleHttp\BodySummarizerInterface
{
    /**
     * @var int|null
     */
    private $truncateAt;
    public function __construct(?int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }
    /**
     * Returns a summarized message body.
     */
    public function summarize(\ShopMagicGoogleSheetsVendor\Psr\Http\Message\MessageInterface $message) : ?string
    {
        return $this->truncateAt === null ? \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Message::bodySummary($message) : \ShopMagicGoogleSheetsVendor\GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
