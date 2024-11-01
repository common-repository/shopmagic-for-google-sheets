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

class ScorecardChartSpec extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    /**
     * @var string
     */
    public $aggregateType;
    protected $baselineValueDataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $baselineValueDataDataType = '';
    protected $baselineValueFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BaselineValueFormat::class;
    protected $baselineValueFormatDataType = '';
    protected $customFormatOptionsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartCustomNumberFormatOptions::class;
    protected $customFormatOptionsDataType = '';
    protected $keyValueDataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $keyValueDataDataType = '';
    protected $keyValueFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\KeyValueFormat::class;
    protected $keyValueFormatDataType = '';
    /**
     * @var string
     */
    public $numberFormatSource;
    public $scaleFactor;
    /**
     * @param string
     */
    public function setAggregateType($aggregateType)
    {
        $this->aggregateType = $aggregateType;
    }
    /**
     * @return string
     */
    public function getAggregateType()
    {
        return $this->aggregateType;
    }
    /**
     * @param ChartData
     */
    public function setBaselineValueData(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $baselineValueData)
    {
        $this->baselineValueData = $baselineValueData;
    }
    /**
     * @return ChartData
     */
    public function getBaselineValueData()
    {
        return $this->baselineValueData;
    }
    /**
     * @param BaselineValueFormat
     */
    public function setBaselineValueFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BaselineValueFormat $baselineValueFormat)
    {
        $this->baselineValueFormat = $baselineValueFormat;
    }
    /**
     * @return BaselineValueFormat
     */
    public function getBaselineValueFormat()
    {
        return $this->baselineValueFormat;
    }
    /**
     * @param ChartCustomNumberFormatOptions
     */
    public function setCustomFormatOptions(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartCustomNumberFormatOptions $customFormatOptions)
    {
        $this->customFormatOptions = $customFormatOptions;
    }
    /**
     * @return ChartCustomNumberFormatOptions
     */
    public function getCustomFormatOptions()
    {
        return $this->customFormatOptions;
    }
    /**
     * @param ChartData
     */
    public function setKeyValueData(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $keyValueData)
    {
        $this->keyValueData = $keyValueData;
    }
    /**
     * @return ChartData
     */
    public function getKeyValueData()
    {
        return $this->keyValueData;
    }
    /**
     * @param KeyValueFormat
     */
    public function setKeyValueFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\KeyValueFormat $keyValueFormat)
    {
        $this->keyValueFormat = $keyValueFormat;
    }
    /**
     * @return KeyValueFormat
     */
    public function getKeyValueFormat()
    {
        return $this->keyValueFormat;
    }
    /**
     * @param string
     */
    public function setNumberFormatSource($numberFormatSource)
    {
        $this->numberFormatSource = $numberFormatSource;
    }
    /**
     * @return string
     */
    public function getNumberFormatSource()
    {
        return $this->numberFormatSource;
    }
    public function setScaleFactor($scaleFactor)
    {
        $this->scaleFactor = $scaleFactor;
    }
    public function getScaleFactor()
    {
        return $this->scaleFactor;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ScorecardChartSpec::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_ScorecardChartSpec');
