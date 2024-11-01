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

class BooleanRule extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $conditionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanCondition::class;
    protected $conditionDataType = '';
    protected $formatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CellFormat::class;
    protected $formatDataType = '';
    /**
     * @param BooleanCondition
     */
    public function setCondition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanCondition $condition)
    {
        $this->condition = $condition;
    }
    /**
     * @return BooleanCondition
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * @param CellFormat
     */
    public function setFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CellFormat $format)
    {
        $this->format = $format;
    }
    /**
     * @return CellFormat
     */
    public function getFormat()
    {
        return $this->format;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanRule::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BooleanRule');
