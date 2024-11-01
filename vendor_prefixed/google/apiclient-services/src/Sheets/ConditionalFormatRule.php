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

class ConditionalFormatRule extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'ranges';
    protected $booleanRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanRule::class;
    protected $booleanRuleDataType = '';
    protected $gradientRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GradientRule::class;
    protected $gradientRuleDataType = '';
    protected $rangesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridRange::class;
    protected $rangesDataType = 'array';
    /**
     * @param BooleanRule
     */
    public function setBooleanRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanRule $booleanRule)
    {
        $this->booleanRule = $booleanRule;
    }
    /**
     * @return BooleanRule
     */
    public function getBooleanRule()
    {
        return $this->booleanRule;
    }
    /**
     * @param GradientRule
     */
    public function setGradientRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GradientRule $gradientRule)
    {
        $this->gradientRule = $gradientRule;
    }
    /**
     * @return GradientRule
     */
    public function getGradientRule()
    {
        return $this->gradientRule;
    }
    /**
     * @param GridRange[]
     */
    public function setRanges($ranges)
    {
        $this->ranges = $ranges;
    }
    /**
     * @return GridRange[]
     */
    public function getRanges()
    {
        return $this->ranges;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_ConditionalFormatRule');
