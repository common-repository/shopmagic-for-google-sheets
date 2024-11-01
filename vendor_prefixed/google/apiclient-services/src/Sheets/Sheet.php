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

class Sheet extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'slicers';
    protected $bandedRangesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BandedRange::class;
    protected $bandedRangesDataType = 'array';
    protected $basicFilterType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BasicFilter::class;
    protected $basicFilterDataType = '';
    protected $chartsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\EmbeddedChart::class;
    protected $chartsDataType = 'array';
    protected $columnGroupsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DimensionGroup::class;
    protected $columnGroupsDataType = 'array';
    protected $conditionalFormatsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ConditionalFormatRule::class;
    protected $conditionalFormatsDataType = 'array';
    protected $dataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridData::class;
    protected $dataDataType = 'array';
    protected $developerMetadataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeveloperMetadata::class;
    protected $developerMetadataDataType = 'array';
    protected $filterViewsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\FilterView::class;
    protected $filterViewsDataType = 'array';
    protected $mergesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridRange::class;
    protected $mergesDataType = 'array';
    protected $propertiesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\SheetProperties::class;
    protected $propertiesDataType = '';
    protected $protectedRangesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\ProtectedRange::class;
    protected $protectedRangesDataType = 'array';
    protected $rowGroupsType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DimensionGroup::class;
    protected $rowGroupsDataType = 'array';
    protected $slicersType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Slicer::class;
    protected $slicersDataType = 'array';
    /**
     * @param BandedRange[]
     */
    public function setBandedRanges($bandedRanges)
    {
        $this->bandedRanges = $bandedRanges;
    }
    /**
     * @return BandedRange[]
     */
    public function getBandedRanges()
    {
        return $this->bandedRanges;
    }
    /**
     * @param BasicFilter
     */
    public function setBasicFilter(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BasicFilter $basicFilter)
    {
        $this->basicFilter = $basicFilter;
    }
    /**
     * @return BasicFilter
     */
    public function getBasicFilter()
    {
        return $this->basicFilter;
    }
    /**
     * @param EmbeddedChart[]
     */
    public function setCharts($charts)
    {
        $this->charts = $charts;
    }
    /**
     * @return EmbeddedChart[]
     */
    public function getCharts()
    {
        return $this->charts;
    }
    /**
     * @param DimensionGroup[]
     */
    public function setColumnGroups($columnGroups)
    {
        $this->columnGroups = $columnGroups;
    }
    /**
     * @return DimensionGroup[]
     */
    public function getColumnGroups()
    {
        return $this->columnGroups;
    }
    /**
     * @param ConditionalFormatRule[]
     */
    public function setConditionalFormats($conditionalFormats)
    {
        $this->conditionalFormats = $conditionalFormats;
    }
    /**
     * @return ConditionalFormatRule[]
     */
    public function getConditionalFormats()
    {
        return $this->conditionalFormats;
    }
    /**
     * @param GridData[]
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    /**
     * @return GridData[]
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param DeveloperMetadata[]
     */
    public function setDeveloperMetadata($developerMetadata)
    {
        $this->developerMetadata = $developerMetadata;
    }
    /**
     * @return DeveloperMetadata[]
     */
    public function getDeveloperMetadata()
    {
        return $this->developerMetadata;
    }
    /**
     * @param FilterView[]
     */
    public function setFilterViews($filterViews)
    {
        $this->filterViews = $filterViews;
    }
    /**
     * @return FilterView[]
     */
    public function getFilterViews()
    {
        return $this->filterViews;
    }
    /**
     * @param GridRange[]
     */
    public function setMerges($merges)
    {
        $this->merges = $merges;
    }
    /**
     * @return GridRange[]
     */
    public function getMerges()
    {
        return $this->merges;
    }
    /**
     * @param SheetProperties
     */
    public function setProperties(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\SheetProperties $properties)
    {
        $this->properties = $properties;
    }
    /**
     * @return SheetProperties
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * @param ProtectedRange[]
     */
    public function setProtectedRanges($protectedRanges)
    {
        $this->protectedRanges = $protectedRanges;
    }
    /**
     * @return ProtectedRange[]
     */
    public function getProtectedRanges()
    {
        return $this->protectedRanges;
    }
    /**
     * @param DimensionGroup[]
     */
    public function setRowGroups($rowGroups)
    {
        $this->rowGroups = $rowGroups;
    }
    /**
     * @return DimensionGroup[]
     */
    public function getRowGroups()
    {
        return $this->rowGroups;
    }
    /**
     * @param Slicer[]
     */
    public function setSlicers($slicers)
    {
        $this->slicers = $slicers;
    }
    /**
     * @return Slicer[]
     */
    public function getSlicers()
    {
        return $this->slicers;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Sheet::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_Sheet');
