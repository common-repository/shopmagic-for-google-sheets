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

class ChartAxisViewWindowOptions extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    public $viewWindowMax;
    public $viewWindowMin;
    /**
     * @var string
     */
    public $viewWindowMode;
    public function setViewWindowMax($viewWindowMax)
    {
        $this->viewWindowMax = $viewWindowMax;
    }
    public function getViewWindowMax()
    {
        return $this->viewWindowMax;
    }
    public function setViewWindowMin($viewWindowMin)
    {
        $this->viewWindowMin = $viewWindowMin;
    }
    public function getViewWindowMin()
    {
        return $this->viewWindowMin;
    }
    /**
     * @param string
     */
    public function setViewWindowMode($viewWindowMode)
    {
        $this->viewWindowMode = $viewWindowMode;
    }
    /**
     * @return string
     */
    public function getViewWindowMode()
    {
        return $this->viewWindowMode;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartAxisViewWindowOptions::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_ChartAxisViewWindowOptions');
