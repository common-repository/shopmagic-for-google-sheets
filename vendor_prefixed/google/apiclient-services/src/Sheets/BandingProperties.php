<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace ShopMagicGoogleSheetsVendor\Google\Service\Sheets;

class BandingProperties extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $firstBandColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $firstBandColorDataType = '';
    protected $firstBandColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $firstBandColorStyleDataType = '';
    protected $footerColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $footerColorDataType = '';
    protected $footerColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $footerColorStyleDataType = '';
    protected $headerColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $headerColorDataType = '';
    protected $headerColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $headerColorStyleDataType = '';
    protected $secondBandColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $secondBandColorDataType = '';
    protected $secondBandColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $secondBandColorStyleDataType = '';
    /**
     * @param Color
     */
    public function setFirstBandColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $firstBandColor)
    {
        $this->firstBandColor = $firstBandColor;
    }
    /**
     * @return Color
     */
    public function getFirstBandColor()
    {
        return $this->firstBandColor;
    }
    /**
     * @param ColorStyle
     */
    public function setFirstBandColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $firstBandColorStyle)
    {
        $this->firstBandColorStyle = $firstBandColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getFirstBandColorStyle()
    {
        return $this->firstBandColorStyle;
    }
    /**
     * @param Color
     */
    public function setFooterColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $footerColor)
    {
        $this->footerColor = $footerColor;
    }
    /**
     * @return Color
     */
    public function getFooterColor()
    {
        return $this->footerColor;
    }
    /**
     * @param ColorStyle
     */
    public function setFooterColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $footerColorStyle)
    {
        $this->footerColorStyle = $footerColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getFooterColorStyle()
    {
        return $this->footerColorStyle;
    }
    /**
     * @param Color
     */
    public function setHeaderColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $headerColor)
    {
        $this->headerColor = $headerColor;
    }
    /**
     * @return Color
     */
    public function getHeaderColor()
    {
        return $this->headerColor;
    }
    /**
     * @param ColorStyle
     */
    public function setHeaderColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $headerColorStyle)
    {
        $this->headerColorStyle = $headerColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getHeaderColorStyle()
    {
        return $this->headerColorStyle;
    }
    /**
     * @param Color
     */
    public function setSecondBandColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $secondBandColor)
    {
        $this->secondBandColor = $secondBandColor;
    }
    /**
     * @return Color
     */
    public function getSecondBandColor()
    {
        return $this->secondBandColor;
    }
    /**
     * @param ColorStyle
     */
    public function setSecondBandColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $secondBandColorStyle)
    {
        $this->secondBandColorStyle = $secondBandColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getSecondBandColorStyle()
    {
        return $this->secondBandColorStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandingProperties::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BandingProperties');
