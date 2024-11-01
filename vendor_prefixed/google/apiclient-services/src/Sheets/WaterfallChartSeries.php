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

class WaterfallChartSeries extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'customSubtotals';
    protected $customSubtotalsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartCustomSubtotal::class;
    protected $customSubtotalsDataType = 'array';
    protected $dataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $dataDataType = '';
    protected $dataLabelType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DataLabel::class;
    protected $dataLabelDataType = '';
    /**
     * @var bool
     */
    public $hideTrailingSubtotal;
    protected $negativeColumnsStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle::class;
    protected $negativeColumnsStyleDataType = '';
    protected $positiveColumnsStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle::class;
    protected $positiveColumnsStyleDataType = '';
    protected $subtotalColumnsStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle::class;
    protected $subtotalColumnsStyleDataType = '';
    /**
     * @param WaterfallChartCustomSubtotal[]
     */
    public function setCustomSubtotals($customSubtotals)
    {
        $this->customSubtotals = $customSubtotals;
    }
    /**
     * @return WaterfallChartCustomSubtotal[]
     */
    public function getCustomSubtotals()
    {
        return $this->customSubtotals;
    }
    /**
     * @param ChartData
     */
    public function setData(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $data)
    {
        $this->data = $data;
    }
    /**
     * @return ChartData
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param DataLabel
     */
    public function setDataLabel(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DataLabel $dataLabel)
    {
        $this->dataLabel = $dataLabel;
    }
    /**
     * @return DataLabel
     */
    public function getDataLabel()
    {
        return $this->dataLabel;
    }
    /**
     * @param bool
     */
    public function setHideTrailingSubtotal($hideTrailingSubtotal)
    {
        $this->hideTrailingSubtotal = $hideTrailingSubtotal;
    }
    /**
     * @return bool
     */
    public function getHideTrailingSubtotal()
    {
        return $this->hideTrailingSubtotal;
    }
    /**
     * @param WaterfallChartColumnStyle
     */
    public function setNegativeColumnsStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle $negativeColumnsStyle)
    {
        $this->negativeColumnsStyle = $negativeColumnsStyle;
    }
    /**
     * @return WaterfallChartColumnStyle
     */
    public function getNegativeColumnsStyle()
    {
        return $this->negativeColumnsStyle;
    }
    /**
     * @param WaterfallChartColumnStyle
     */
    public function setPositiveColumnsStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle $positiveColumnsStyle)
    {
        $this->positiveColumnsStyle = $positiveColumnsStyle;
    }
    /**
     * @return WaterfallChartColumnStyle
     */
    public function getPositiveColumnsStyle()
    {
        return $this->positiveColumnsStyle;
    }
    /**
     * @param WaterfallChartColumnStyle
     */
    public function setSubtotalColumnsStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartColumnStyle $subtotalColumnsStyle)
    {
        $this->subtotalColumnsStyle = $subtotalColumnsStyle;
    }
    /**
     * @return WaterfallChartColumnStyle
     */
    public function getSubtotalColumnsStyle()
    {
        return $this->subtotalColumnsStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\WaterfallChartSeries::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_WaterfallChartSeries');
