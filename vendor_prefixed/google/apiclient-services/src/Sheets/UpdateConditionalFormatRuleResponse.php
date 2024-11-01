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

class UpdateConditionalFormatRuleResponse extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    /**
     * @var int
     */
    public $newIndex;
    protected $newRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule::class;
    protected $newRuleDataType = '';
    /**
     * @var int
     */
    public $oldIndex;
    protected $oldRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule::class;
    protected $oldRuleDataType = '';
    /**
     * @param int
     */
    public function setNewIndex($newIndex)
    {
        $this->newIndex = $newIndex;
    }
    /**
     * @return int
     */
    public function getNewIndex()
    {
        return $this->newIndex;
    }
    /**
     * @param ConditionalFormatRule
     */
    public function setNewRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule $newRule)
    {
        $this->newRule = $newRule;
    }
    /**
     * @return ConditionalFormatRule
     */
    public function getNewRule()
    {
        return $this->newRule;
    }
    /**
     * @param int
     */
    public function setOldIndex($oldIndex)
    {
        $this->oldIndex = $oldIndex;
    }
    /**
     * @return int
     */
    public function getOldIndex()
    {
        return $this->oldIndex;
    }
    /**
     * @param ConditionalFormatRule
     */
    public function setOldRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule $oldRule)
    {
        $this->oldRule = $oldRule;
    }
    /**
     * @return ConditionalFormatRule
     */
    public function getOldRule()
    {
        return $this->oldRule;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateConditionalFormatRuleResponse::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_UpdateConditionalFormatRuleResponse');
