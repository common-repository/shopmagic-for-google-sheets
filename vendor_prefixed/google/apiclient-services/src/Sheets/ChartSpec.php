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

class ChartSpec extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'sortSpecs';
    /**
     * @var string
     */
    public $altText;
    protected $backgroundColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $backgroundColorDataType = '';
    protected $backgroundColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $backgroundColorStyleDataType = '';
    protected $basicChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BasicChartSpec::class;
    protected $basicChartDataType = '';
    protected $bubbleChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BubbleChartSpec::class;
    protected $bubbleChartDataType = '';
    protected $candlestickChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CandlestickChartSpec::class;
    protected $candlestickChartDataType = '';
    protected $dataSourceChartPropertiesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DataSourceChartProperties::class;
    protected $dataSourceChartPropertiesDataType = '';
    protected $filterSpecsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\FilterSpec::class;
    protected $filterSpecsDataType = 'array';
    /**
     * @var string
     */
    public $fontName;
    /**
     * @var string
     */
    public $hiddenDimensionStrategy;
    protected $histogramChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\HistogramChartSpec::class;
    protected $histogramChartDataType = '';
    /**
     * @var bool
     */
    public $maximized;
    protected $orgChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\OrgChartSpec::class;
    protected $orgChartDataType = '';
    protected $pieChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\PieChartSpec::class;
    protected $pieChartDataType = '';
    protected $scorecardChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ScorecardChartSpec::class;
    protected $scorecardChartDataType = '';
    protected $sortSpecsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\SortSpec::class;
    protected $sortSpecsDataType = 'array';
    /**
     * @var string
     */
    public $subtitle;
    protected $subtitleTextFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat::class;
    protected $subtitleTextFormatDataType = '';
    protected $subtitleTextPositionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition::class;
    protected $subtitleTextPositionDataType = '';
    /**
     * @var string
     */
    public $title;
    protected $titleTextFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat::class;
    protected $titleTextFormatDataType = '';
    protected $titleTextPositionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition::class;
    protected $titleTextPositionDataType = '';
    protected $treemapChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TreemapChartSpec::class;
    protected $treemapChartDataType = '';
    protected $waterfallChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartSpec::class;
    protected $waterfallChartDataType = '';
    /**
     * @param string
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
    }
    /**
     * @return string
     */
    public function getAltText()
    {
        return $this->altText;
    }
    /**
     * @param Color
     */
    public function setBackgroundColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }
    /**
     * @return Color
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * @param ColorStyle
     */
    public function setBackgroundColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $backgroundColorStyle)
    {
        $this->backgroundColorStyle = $backgroundColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getBackgroundColorStyle()
    {
        return $this->backgroundColorStyle;
    }
    /**
     * @param BasicChartSpec
     */
    public function setBasicChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BasicChartSpec $basicChart)
    {
        $this->basicChart = $basicChart;
    }
    /**
     * @return BasicChartSpec
     */
    public function getBasicChart()
    {
        return $this->basicChart;
    }
    /**
     * @param BubbleChartSpec
     */
    public function setBubbleChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BubbleChartSpec $bubbleChart)
    {
        $this->bubbleChart = $bubbleChart;
    }
    /**
     * @return BubbleChartSpec
     */
    public function getBubbleChart()
    {
        return $this->bubbleChart;
    }
    /**
     * @param CandlestickChartSpec
     */
    public function setCandlestickChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CandlestickChartSpec $candlestickChart)
    {
        $this->candlestickChart = $candlestickChart;
    }
    /**
     * @return CandlestickChartSpec
     */
    public function getCandlestickChart()
    {
        return $this->candlestickChart;
    }
    /**
     * @param DataSourceChartProperties
     */
    public function setDataSourceChartProperties(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DataSourceChartProperties $dataSourceChartProperties)
    {
        $this->dataSourceChartProperties = $dataSourceChartProperties;
    }
    /**
     * @return DataSourceChartProperties
     */
    public function getDataSourceChartProperties()
    {
        return $this->dataSourceChartProperties;
    }
    /**
     * @param FilterSpec[]
     */
    public function setFilterSpecs($filterSpecs)
    {
        $this->filterSpecs = $filterSpecs;
    }
    /**
     * @return FilterSpec[]
     */
    public function getFilterSpecs()
    {
        return $this->filterSpecs;
    }
    /**
     * @param string
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;
    }
    /**
     * @return string
     */
    public function getFontName()
    {
        return $this->fontName;
    }
    /**
     * @param string
     */
    public function setHiddenDimensionStrategy($hiddenDimensionStrategy)
    {
        $this->hiddenDimensionStrategy = $hiddenDimensionStrategy;
    }
    /**
     * @return string
     */
    public function getHiddenDimensionStrategy()
    {
        return $this->hiddenDimensionStrategy;
    }
    /**
     * @param HistogramChartSpec
     */
    public function setHistogramChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\HistogramChartSpec $histogramChart)
    {
        $this->histogramChart = $histogramChart;
    }
    /**
     * @return HistogramChartSpec
     */
    public function getHistogramChart()
    {
        return $this->histogramChart;
    }
    /**
     * @param bool
     */
    public function setMaximized($maximized)
    {
        $this->maximized = $maximized;
    }
    /**
     * @return bool
     */
    public function getMaximized()
    {
        return $this->maximized;
    }
    /**
     * @param OrgChartSpec
     */
    public function setOrgChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\OrgChartSpec $orgChart)
    {
        $this->orgChart = $orgChart;
    }
    /**
     * @return OrgChartSpec
     */
    public function getOrgChart()
    {
        return $this->orgChart;
    }
    /**
     * @param PieChartSpec
     */
    public function setPieChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\PieChartSpec $pieChart)
    {
        $this->pieChart = $pieChart;
    }
    /**
     * @return PieChartSpec
     */
    public function getPieChart()
    {
        return $this->pieChart;
    }
    /**
     * @param ScorecardChartSpec
     */
    public function setScorecardChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ScorecardChartSpec $scorecardChart)
    {
        $this->scorecardChart = $scorecardChart;
    }
    /**
     * @return ScorecardChartSpec
     */
    public function getScorecardChart()
    {
        return $this->scorecardChart;
    }
    /**
     * @param SortSpec[]
     */
    public function setSortSpecs($sortSpecs)
    {
        $this->sortSpecs = $sortSpecs;
    }
    /**
     * @return SortSpec[]
     */
    public function getSortSpecs()
    {
        return $this->sortSpecs;
    }
    /**
     * @param string
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    /**
     * @param TextFormat
     */
    public function setSubtitleTextFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat $subtitleTextFormat)
    {
        $this->subtitleTextFormat = $subtitleTextFormat;
    }
    /**
     * @return TextFormat
     */
    public function getSubtitleTextFormat()
    {
        return $this->subtitleTextFormat;
    }
    /**
     * @param TextPosition
     */
    public function setSubtitleTextPosition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition $subtitleTextPosition)
    {
        $this->subtitleTextPosition = $subtitleTextPosition;
    }
    /**
     * @return TextPosition
     */
    public function getSubtitleTextPosition()
    {
        return $this->subtitleTextPosition;
    }
    /**
     * @param string
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param TextFormat
     */
    public function setTitleTextFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat $titleTextFormat)
    {
        $this->titleTextFormat = $titleTextFormat;
    }
    /**
     * @return TextFormat
     */
    public function getTitleTextFormat()
    {
        return $this->titleTextFormat;
    }
    /**
     * @param TextPosition
     */
    public function setTitleTextPosition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition $titleTextPosition)
    {
        $this->titleTextPosition = $titleTextPosition;
    }
    /**
     * @return TextPosition
     */
    public function getTitleTextPosition()
    {
        return $this->titleTextPosition;
    }
    /**
     * @param TreemapChartSpec
     */
    public function setTreemapChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TreemapChartSpec $treemapChart)
    {
        $this->treemapChart = $treemapChart;
    }
    /**
     * @return TreemapChartSpec
     */
    public function getTreemapChart()
    {
        return $this->treemapChart;
    }
    /**
     * @param WaterfallChartSpec
     */
    public function setWaterfallChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartSpec $waterfallChart)
    {
        $this->waterfallChart = $waterfallChart;
    }
    /**
     * @return WaterfallChartSpec
     */
    public function getWaterfallChart()
    {
        return $this->waterfallChart;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartSpec::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_ChartSpec');
