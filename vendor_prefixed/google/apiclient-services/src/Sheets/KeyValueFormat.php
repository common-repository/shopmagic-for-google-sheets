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

class KeyValueFormat extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $positionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition::class;
    protected $positionDataType = '';
    protected $textFormatType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat::class;
    protected $textFormatDataType = '';
    /**
     * @param TextPosition
     */
    public function setPosition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextPosition $position)
    {
        $this->position = $position;
    }
    /**
     * @return TextPosition
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param TextFormat
     */
    public function setTextFormat(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TextFormat $textFormat)
    {
        $this->textFormat = $textFormat;
    }
    /**
     * @return TextFormat
     */
    public function getTextFormat()
    {
        return $this->textFormat;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\KeyValueFormat::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_KeyValueFormat');
