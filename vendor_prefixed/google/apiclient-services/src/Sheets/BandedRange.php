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

class BandedRange extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    /**
     * @var int
     */
    public $bandedRangeId;
    protected $columnPropertiesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandingProperties::class;
    protected $columnPropertiesDataType = '';
    protected $rangeType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridRange::class;
    protected $rangeDataType = '';
    protected $rowPropertiesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandingProperties::class;
    protected $rowPropertiesDataType = '';
    /**
     * @param int
     */
    public function setBandedRangeId($bandedRangeId)
    {
        $this->bandedRangeId = $bandedRangeId;
    }
    /**
     * @return int
     */
    public function getBandedRangeId()
    {
        return $this->bandedRangeId;
    }
    /**
     * @param BandingProperties
     */
    public function setColumnProperties(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandingProperties $columnProperties)
    {
        $this->columnProperties = $columnProperties;
    }
    /**
     * @return BandingProperties
     */
    public function getColumnProperties()
    {
        return $this->columnProperties;
    }
    /**
     * @param GridRange
     */
    public function setRange(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridRange $range)
    {
        $this->range = $range;
    }
    /**
     * @return GridRange
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * @param BandingProperties
     */
    public function setRowProperties(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandingProperties $rowProperties)
    {
        $this->rowProperties = $rowProperties;
    }
    /**
     * @return BandingProperties
     */
    public function getRowProperties()
    {
        return $this->rowProperties;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandedRange::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BandedRange');
