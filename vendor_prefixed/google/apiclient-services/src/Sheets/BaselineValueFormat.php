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

class BaselineValueFormat extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    /**
     * @var string
     */
    public $comparisonType;
    /**
     * @var string
     */
    public $description;
    protected $negativeColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $negativeColorDataType = '';
    protected $negativeColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $negativeColorStyleDataType = '';
    protected $positionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition::class;
    protected $positionDataType = '';
    protected $positiveColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $positiveColorDataType = '';
    protected $positiveColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $positiveColorStyleDataType = '';
    protected $textFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat::class;
    protected $textFormatDataType = '';
    /**
     * @param string
     */
    public function setComparisonType($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }
    /**
     * @return string
     */
    public function getComparisonType()
    {
        return $this->comparisonType;
    }
    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param Color
     */
    public function setNegativeColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $negativeColor)
    {
        $this->negativeColor = $negativeColor;
    }
    /**
     * @return Color
     */
    public function getNegativeColor()
    {
        return $this->negativeColor;
    }
    /**
     * @param ColorStyle
     */
    public function setNegativeColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $negativeColorStyle)
    {
        $this->negativeColorStyle = $negativeColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getNegativeColorStyle()
    {
        return $this->negativeColorStyle;
    }
    /**
     * @param TextPosition
     */
    public function setPosition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition $position)
    {
        $this->position = $position;
    }
    /**
     * @return TextPosition
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param Color
     */
    public function setPositiveColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $positiveColor)
    {
        $this->positiveColor = $positiveColor;
    }
    /**
     * @return Color
     */
    public function getPositiveColor()
    {
        return $this->positiveColor;
    }
    /**
     * @param ColorStyle
     */
    public function setPositiveColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $positiveColorStyle)
    {
        $this->positiveColorStyle = $positiveColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getPositiveColorStyle()
    {
        return $this->positiveColorStyle;
    }
    /**
     * @param TextFormat
     */
    public function setTextFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat $textFormat)
    {
        $this->textFormat = $textFormat;
    }
    /**
     * @return TextFormat
     */
    public function getTextFormat()
    {
        return $this->textFormat;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BaselineValueFormat::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BaselineValueFormat');
