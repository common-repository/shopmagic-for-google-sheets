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

class InterpolationPoint extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $colorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $colorDataType = '';
    protected $colorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $colorStyleDataType = '';
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $value;
    /**
     * @param Color
     */
    public function setColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $color)
    {
        $this->color = $color;
    }
    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param ColorStyle
     */
    public function setColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $colorStyle)
    {
        $this->colorStyle = $colorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getColorStyle()
    {
        return $this->colorStyle;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_InterpolationPoint');
