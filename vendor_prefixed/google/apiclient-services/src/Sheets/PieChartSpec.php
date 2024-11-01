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

class PieChartSpec extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $domainType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $domainDataType = '';
    /**
     * @var string
     */
    public $legendPosition;
    public $pieHole;
    protected $seriesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $seriesDataType = '';
    /**
     * @var bool
     */
    public $threeDimensional;
    /**
     * @param ChartData
     */
    public function setDomain(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $domain)
    {
        $this->domain = $domain;
    }
    /**
     * @return ChartData
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * @param string
     */
    public function setLegendPosition($legendPosition)
    {
        $this->legendPosition = $legendPosition;
    }
    /**
     * @return string
     */
    public function getLegendPosition()
    {
        return $this->legendPosition;
    }
    public function setPieHole($pieHole)
    {
        $this->pieHole = $pieHole;
    }
    public function getPieHole()
    {
        return $this->pieHole;
    }
    /**
     * @param ChartData
     */
    public function setSeries(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $series)
    {
        $this->series = $series;
    }
    /**
     * @return ChartData
     */
    public function getSeries()
    {
        return $this->series;
    }
    /**
     * @param bool
     */
    public function setThreeDimensional($threeDimensional)
    {
        $this->threeDimensional = $threeDimensional;
    }
    /**
     * @return bool
     */
    public function getThreeDimensional()
    {
        return $this->threeDimensional;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\PieChartSpec::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_PieChartSpec');
