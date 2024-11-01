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

class BasicSeriesDataPointStyleOverride extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $colorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $colorDataType = '';
    protected $colorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $colorStyleDataType = '';
    /**
     * @var int
     */
    public $index;
    protected $pointStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\PointStyle::class;
    protected $pointStyleDataType = '';
    /**
     * @param Color
     */
    public function setColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $color)
    {
        $this->color = $color;
    }
    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param ColorStyle
     */
    public function setColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $colorStyle)
    {
        $this->colorStyle = $colorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getColorStyle()
    {
        return $this->colorStyle;
    }
    /**
     * @param int
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }
    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * @param PointStyle
     */
    public function setPointStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\PointStyle $pointStyle)
    {
        $this->pointStyle = $pointStyle;
    }
    /**
     * @return PointStyle
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BasicSeriesDataPointStyleOverride::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BasicSeriesDataPointStyleOverride');
