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

class AddChartRequest extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $chartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\EmbeddedChart::class;
    protected $chartDataType = '';
    /**
     * @param EmbeddedChart
     */
    public function setChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\EmbeddedChart $chart)
    {
        $this->chart = $chart;
    }
    /**
     * @return EmbeddedChart
     */
    public function getChart()
    {
        return $this->chart;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddChartRequest::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_AddChartRequest');
