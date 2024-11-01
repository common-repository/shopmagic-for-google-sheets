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

class OrgChartSpec extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $labelsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $labelsDataType = '';
    protected $nodeColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $nodeColorDataType = '';
    protected $nodeColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $nodeColorStyleDataType = '';
    /**
     * @var string
     */
    public $nodeSize;
    protected $parentLabelsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $parentLabelsDataType = '';
    protected $selectedNodeColorType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color::class;
    protected $selectedNodeColorDataType = '';
    protected $selectedNodeColorStyleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle::class;
    protected $selectedNodeColorStyleDataType = '';
    protected $tooltipsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData::class;
    protected $tooltipsDataType = '';
    /**
     * @param ChartData
     */
    public function setLabels(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return ChartData
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param Color
     */
    public function setNodeColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $nodeColor)
    {
        $this->nodeColor = $nodeColor;
    }
    /**
     * @return Color
     */
    public function getNodeColor()
    {
        return $this->nodeColor;
    }
    /**
     * @param ColorStyle
     */
    public function setNodeColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $nodeColorStyle)
    {
        $this->nodeColorStyle = $nodeColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getNodeColorStyle()
    {
        return $this->nodeColorStyle;
    }
    /**
     * @param string
     */
    public function setNodeSize($nodeSize)
    {
        $this->nodeSize = $nodeSize;
    }
    /**
     * @return string
     */
    public function getNodeSize()
    {
        return $this->nodeSize;
    }
    /**
     * @param ChartData
     */
    public function setParentLabels(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $parentLabels)
    {
        $this->parentLabels = $parentLabels;
    }
    /**
     * @return ChartData
     */
    public function getParentLabels()
    {
        return $this->parentLabels;
    }
    /**
     * @param Color
     */
    public function setSelectedNodeColor(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Color $selectedNodeColor)
    {
        $this->selectedNodeColor = $selectedNodeColor;
    }
    /**
     * @return Color
     */
    public function getSelectedNodeColor()
    {
        return $this->selectedNodeColor;
    }
    /**
     * @param ColorStyle
     */
    public function setSelectedNodeColorStyle(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ColorStyle $selectedNodeColorStyle)
    {
        $this->selectedNodeColorStyle = $selectedNodeColorStyle;
    }
    /**
     * @return ColorStyle
     */
    public function getSelectedNodeColorStyle()
    {
        return $this->selectedNodeColorStyle;
    }
    /**
     * @param ChartData
     */
    public function setTooltips(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ChartData $tooltips)
    {
        $this->tooltips = $tooltips;
    }
    /**
     * @return ChartData
     */
    public function getTooltips()
    {
        return $this->tooltips;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\OrgChartSpec::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_OrgChartSpec');
