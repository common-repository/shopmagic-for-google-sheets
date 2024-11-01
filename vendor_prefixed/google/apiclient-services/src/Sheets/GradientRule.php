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

class GradientRule extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $maxpointType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint::class;
    protected $maxpointDataType = '';
    protected $midpointType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint::class;
    protected $midpointDataType = '';
    protected $minpointType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint::class;
    protected $minpointDataType = '';
    /**
     * @param InterpolationPoint
     */
    public function setMaxpoint(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint $maxpoint)
    {
        $this->maxpoint = $maxpoint;
    }
    /**
     * @return InterpolationPoint
     */
    public function getMaxpoint()
    {
        return $this->maxpoint;
    }
    /**
     * @param InterpolationPoint
     */
    public function setMidpoint(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint $midpoint)
    {
        $this->midpoint = $midpoint;
    }
    /**
     * @return InterpolationPoint
     */
    public function getMidpoint()
    {
        return $this->midpoint;
    }
    /**
     * @param InterpolationPoint
     */
    public function setMinpoint(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\InterpolationPoint $minpoint)
    {
        $this->minpoint = $minpoint;
    }
    /**
     * @return InterpolationPoint
     */
    public function getMinpoint()
    {
        return $this->minpoint;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GradientRule::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_GradientRule');
