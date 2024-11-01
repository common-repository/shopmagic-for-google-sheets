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

class TreemapChartSpec extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $colorDataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $colorDataDataType = '';
    protected $colorScaleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TreemapChartColorScale::class;
    protected $colorScaleDataType = '';
    protected $headerColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $headerColorDataType = '';
    protected $headerColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $headerColorStyleDataType = '';
    /**
     * @var bool
     */
    public $hideTooltips;
    /**
     * @var int
     */
    public $hintedLevels;
    protected $labelsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $labelsDataType = '';
    /**
     * @var int
     */
    public $levels;
    public $maxValue;
    public $minValue;
    protected $parentLabelsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $parentLabelsDataType = '';
    protected $sizeDataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $sizeDataDataType = '';
    protected $textFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat::class;
    protected $textFormatDataType = '';
    /**
     * @param ChartData
     */
    public function setColorData(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $colorData)
    {
        $this->colorData = $colorData;
    }
    /**
     * @return ChartData
     */
    public function getColorData()
    {
        return $this->colorData;
    }
    /**
     * @param TreemapChartColorScale
     */
    public function setColorScale(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TreemapChartColorScale $colorScale)
    {
        $this->colorScale = $colorScale;
    }
    /**
     * @return TreemapChartColorScale
     */
    public function getColorScale()
    {
        return $this->colorScale;
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
     * @param bool
     */
    public function setHideTooltips($hideTooltips)
    {
        $this->hideTooltips = $hideTooltips;
    }
    /**
     * @return bool
     */
    public function getHideTooltips()
    {
        return $this->hideTooltips;
    }
    /**
     * @param int
     */
    public function setHintedLevels($hintedLevels)
    {
        $this->hintedLevels = $hintedLevels;
    }
    /**
     * @return int
     */
    public function getHintedLevels()
    {
        return $this->hintedLevels;
    }
    /**
     * @param ChartData
     */
    public function setLabels(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return ChartData
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param int
     */
    public function setLevels($levels)
    {
        $this->levels = $levels;
    }
    /**
     * @return int
     */
    public function getLevels()
    {
        return $this->levels;
    }
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }
    public function getMaxValue()
    {
        return $this->maxValue;
    }
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }
    public function getMinValue()
    {
        return $this->minValue;
    }
    /**
     * @param ChartData
     */
    public function setParentLabels(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $parentLabels)
    {
        $this->parentLabels = $parentLabels;
    }
    /**
     * @return ChartData
     */
    public function getParentLabels()
    {
        return $this->parentLabels;
    }
    /**
     * @param ChartData
     */
    public function setSizeData(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $sizeData)
    {
        $this->sizeData = $sizeData;
    }
    /**
     * @return ChartData
     */
    public function getSizeData()
    {
        return $this->sizeData;
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
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TreemapChartSpec::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_TreemapChartSpec');
