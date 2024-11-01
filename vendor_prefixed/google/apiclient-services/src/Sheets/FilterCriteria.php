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

class FilterCriteria extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'hiddenValues';
    protected $conditionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BooleanCondition::class;
    protected $conditionDataType = '';
    /**
     * @var string[]
     */
    public $hiddenValues;
    protected $visibleBackgroundColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $visibleBackgroundColorDataType = '';
    protected $visibleBackgroundColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $visibleBackgroundColorStyleDataType = '';
    protected $visibleForegroundColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $visibleForegroundColorDataType = '';
    protected $visibleForegroundColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $visibleForegroundColorStyleDataType = '';
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
     * @param string[]
     */
    public function setHiddenValues($hiddenValues)
    {
        $this->hiddenValues = $hiddenValues;
    }
    /**
     * @return string[]
     */
    public function getHiddenValues()
    {
        return $this->hiddenValues;
    }
    /**
     * @param Color
     */
    public function setVisibleBackgroundColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $visibleBackgroundColor)
    {
        $this->visibleBackgroundColor = $visibleBackgroundColor;
    }
    /**
     * @return Color
     */
    public function getVisibleBackgroundColor()
    {
        return $this->visibleBackgroundColor;
    }
    /**
     * @param ColorStyle
     */
    public function setVisibleBackgroundColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $visibleBackgroundColorStyle)
    {
        $this->visibleBackgroundColorStyle = $visibleBackgroundColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getVisibleBackgroundColorStyle()
    {
        return $this->visibleBackgroundColorStyle;
    }
    /**
     * @param Color
     */
    public function setVisibleForegroundColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $visibleForegroundColor)
    {
        $this->visibleForegroundColor = $visibleForegroundColor;
    }
    /**
     * @return Color
     */
    public function getVisibleForegroundColor()
    {
        return $this->visibleForegroundColor;
    }
    /**
     * @param ColorStyle
     */
    public function setVisibleForegroundColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $visibleForegroundColorStyle)
    {
        $this->visibleForegroundColorStyle = $visibleForegroundColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getVisibleForegroundColorStyle()
    {
        return $this->visibleForegroundColorStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\FilterCriteria::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_FilterCriteria');
