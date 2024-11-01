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

class HistogramSeries extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $barColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $barColorDataType = '';
    protected $barColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $barColorStyleDataType = '';
    protected $dataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $dataDataType = '';
    /**
     * @param Color
     */
    public function setBarColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $barColor)
    {
        $this->barColor = $barColor;
    }
    /**
     * @return Color
     */
    public function getBarColor()
    {
        return $this->barColor;
    }
    /**
     * @param ColorStyle
     */
    public function setBarColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $barColorStyle)
    {
        $this->barColorStyle = $barColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getBarColorStyle()
    {
        return $this->barColorStyle;
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
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\HistogramSeries::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_HistogramSeries');
