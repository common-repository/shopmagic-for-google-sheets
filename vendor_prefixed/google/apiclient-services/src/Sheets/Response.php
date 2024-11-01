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

class Response extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    protected $addBandingType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddBandingResponse::class;
    protected $addBandingDataType = '';
    protected $addChartType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddChartResponse::class;
    protected $addChartDataType = '';
    protected $addDataSourceType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddDataSourceResponse::class;
    protected $addDataSourceDataType = '';
    protected $addDimensionGroupType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddDimensionGroupResponse::class;
    protected $addDimensionGroupDataType = '';
    protected $addFilterViewType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddFilterViewResponse::class;
    protected $addFilterViewDataType = '';
    protected $addNamedRangeType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddNamedRangeResponse::class;
    protected $addNamedRangeDataType = '';
    protected $addProtectedRangeType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddProtectedRangeResponse::class;
    protected $addProtectedRangeDataType = '';
    protected $addSheetType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddSheetResponse::class;
    protected $addSheetDataType = '';
    protected $addSlicerType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddSlicerResponse::class;
    protected $addSlicerDataType = '';
    protected $createDeveloperMetadataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CreateDeveloperMetadataResponse::class;
    protected $createDeveloperMetadataDataType = '';
    protected $deleteConditionalFormatRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteConditionalFormatRuleResponse::class;
    protected $deleteConditionalFormatRuleDataType = '';
    protected $deleteDeveloperMetadataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDeveloperMetadataResponse::class;
    protected $deleteDeveloperMetadataDataType = '';
    protected $deleteDimensionGroupType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDimensionGroupResponse::class;
    protected $deleteDimensionGroupDataType = '';
    protected $deleteDuplicatesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDuplicatesResponse::class;
    protected $deleteDuplicatesDataType = '';
    protected $duplicateFilterViewType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DuplicateFilterViewResponse::class;
    protected $duplicateFilterViewDataType = '';
    protected $duplicateSheetType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DuplicateSheetResponse::class;
    protected $duplicateSheetDataType = '';
    protected $findReplaceType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\FindReplaceResponse::class;
    protected $findReplaceDataType = '';
    protected $refreshDataSourceType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\RefreshDataSourceResponse::class;
    protected $refreshDataSourceDataType = '';
    protected $trimWhitespaceType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TrimWhitespaceResponse::class;
    protected $trimWhitespaceDataType = '';
    protected $updateConditionalFormatRuleType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateConditionalFormatRuleResponse::class;
    protected $updateConditionalFormatRuleDataType = '';
    protected $updateDataSourceType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateDataSourceResponse::class;
    protected $updateDataSourceDataType = '';
    protected $updateDeveloperMetadataType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateDeveloperMetadataResponse::class;
    protected $updateDeveloperMetadataDataType = '';
    protected $updateEmbeddedObjectPositionType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateEmbeddedObjectPositionResponse::class;
    protected $updateEmbeddedObjectPositionDataType = '';
    /**
     * @param AddBandingResponse
     */
    public function setAddBanding(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddBandingResponse $addBanding)
    {
        $this->addBanding = $addBanding;
    }
    /**
     * @return AddBandingResponse
     */
    public function getAddBanding()
    {
        return $this->addBanding;
    }
    /**
     * @param AddChartResponse
     */
    public function setAddChart(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddChartResponse $addChart)
    {
        $this->addChart = $addChart;
    }
    /**
     * @return AddChartResponse
     */
    public function getAddChart()
    {
        return $this->addChart;
    }
    /**
     * @param AddDataSourceResponse
     */
    public function setAddDataSource(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddDataSourceResponse $addDataSource)
    {
        $this->addDataSource = $addDataSource;
    }
    /**
     * @return AddDataSourceResponse
     */
    public function getAddDataSource()
    {
        return $this->addDataSource;
    }
    /**
     * @param AddDimensionGroupResponse
     */
    public function setAddDimensionGroup(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddDimensionGroupResponse $addDimensionGroup)
    {
        $this->addDimensionGroup = $addDimensionGroup;
    }
    /**
     * @return AddDimensionGroupResponse
     */
    public function getAddDimensionGroup()
    {
        return $this->addDimensionGroup;
    }
    /**
     * @param AddFilterViewResponse
     */
    public function setAddFilterView(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddFilterViewResponse $addFilterView)
    {
        $this->addFilterView = $addFilterView;
    }
    /**
     * @return AddFilterViewResponse
     */
    public function getAddFilterView()
    {
        return $this->addFilterView;
    }
    /**
     * @param AddNamedRangeResponse
     */
    public function setAddNamedRange(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddNamedRangeResponse $addNamedRange)
    {
        $this->addNamedRange = $addNamedRange;
    }
    /**
     * @return AddNamedRangeResponse
     */
    public function getAddNamedRange()
    {
        return $this->addNamedRange;
    }
    /**
     * @param AddProtectedRangeResponse
     */
    public function setAddProtectedRange(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddProtectedRangeResponse $addProtectedRange)
    {
        $this->addProtectedRange = $addProtectedRange;
    }
    /**
     * @return AddProtectedRangeResponse
     */
    public function getAddProtectedRange()
    {
        return $this->addProtectedRange;
    }
    /**
     * @param AddSheetResponse
     */
    public function setAddSheet(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddSheetResponse $addSheet)
    {
        $this->addSheet = $addSheet;
    }
    /**
     * @return AddSheetResponse
     */
    public function getAddSheet()
    {
        return $this->addSheet;
    }
    /**
     * @param AddSlicerResponse
     */
    public function setAddSlicer(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\AddSlicerResponse $addSlicer)
    {
        $this->addSlicer = $addSlicer;
    }
    /**
     * @return AddSlicerResponse
     */
    public function getAddSlicer()
    {
        return $this->addSlicer;
    }
    /**
     * @param CreateDeveloperMetadataResponse
     */
    public function setCreateDeveloperMetadata(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\CreateDeveloperMetadataResponse $createDeveloperMetadata)
    {
        $this->createDeveloperMetadata = $createDeveloperMetadata;
    }
    /**
     * @return CreateDeveloperMetadataResponse
     */
    public function getCreateDeveloperMetadata()
    {
        return $this->createDeveloperMetadata;
    }
    /**
     * @param DeleteConditionalFormatRuleResponse
     */
    public function setDeleteConditionalFormatRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteConditionalFormatRuleResponse $deleteConditionalFormatRule)
    {
        $this->deleteConditionalFormatRule = $deleteConditionalFormatRule;
    }
    /**
     * @return DeleteConditionalFormatRuleResponse
     */
    public function getDeleteConditionalFormatRule()
    {
        return $this->deleteConditionalFormatRule;
    }
    /**
     * @param DeleteDeveloperMetadataResponse
     */
    public function setDeleteDeveloperMetadata(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDeveloperMetadataResponse $deleteDeveloperMetadata)
    {
        $this->deleteDeveloperMetadata = $deleteDeveloperMetadata;
    }
    /**
     * @return DeleteDeveloperMetadataResponse
     */
    public function getDeleteDeveloperMetadata()
    {
        return $this->deleteDeveloperMetadata;
    }
    /**
     * @param DeleteDimensionGroupResponse
     */
    public function setDeleteDimensionGroup(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDimensionGroupResponse $deleteDimensionGroup)
    {
        $this->deleteDimensionGroup = $deleteDimensionGroup;
    }
    /**
     * @return DeleteDimensionGroupResponse
     */
    public function getDeleteDimensionGroup()
    {
        return $this->deleteDimensionGroup;
    }
    /**
     * @param DeleteDuplicatesResponse
     */
    public function setDeleteDuplicates(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DeleteDuplicatesResponse $deleteDuplicates)
    {
        $this->deleteDuplicates = $deleteDuplicates;
    }
    /**
     * @return DeleteDuplicatesResponse
     */
    public function getDeleteDuplicates()
    {
        return $this->deleteDuplicates;
    }
    /**
     * @param DuplicateFilterViewResponse
     */
    public function setDuplicateFilterView(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DuplicateFilterViewResponse $duplicateFilterView)
    {
        $this->duplicateFilterView = $duplicateFilterView;
    }
    /**
     * @return DuplicateFilterViewResponse
     */
    public function getDuplicateFilterView()
    {
        return $this->duplicateFilterView;
    }
    /**
     * @param DuplicateSheetResponse
     */
    public function setDuplicateSheet(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DuplicateSheetResponse $duplicateSheet)
    {
        $this->duplicateSheet = $duplicateSheet;
    }
    /**
     * @return DuplicateSheetResponse
     */
    public function getDuplicateSheet()
    {
        return $this->duplicateSheet;
    }
    /**
     * @param FindReplaceResponse
     */
    public function setFindReplace(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\FindReplaceResponse $findReplace)
    {
        $this->findReplace = $findReplace;
    }
    /**
     * @return FindReplaceResponse
     */
    public function getFindReplace()
    {
        return $this->findReplace;
    }
    /**
     * @param RefreshDataSourceResponse
     */
    public function setRefreshDataSource(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\RefreshDataSourceResponse $refreshDataSource)
    {
        $this->refreshDataSource = $refreshDataSource;
    }
    /**
     * @return RefreshDataSourceResponse
     */
    public function getRefreshDataSource()
    {
        return $this->refreshDataSource;
    }
    /**
     * @param TrimWhitespaceResponse
     */
    public function setTrimWhitespace(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\TrimWhitespaceResponse $trimWhitespace)
    {
        $this->trimWhitespace = $trimWhitespace;
    }
    /**
     * @return TrimWhitespaceResponse
     */
    public function getTrimWhitespace()
    {
        return $this->trimWhitespace;
    }
    /**
     * @param UpdateConditionalFormatRuleResponse
     */
    public function setUpdateConditionalFormatRule(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateConditionalFormatRuleResponse $updateConditionalFormatRule)
    {
        $this->updateConditionalFormatRule = $updateConditionalFormatRule;
    }
    /**
     * @return UpdateConditionalFormatRuleResponse
     */
    public function getUpdateConditionalFormatRule()
    {
        return $this->updateConditionalFormatRule;
    }
    /**
     * @param UpdateDataSourceResponse
     */
    public function setUpdateDataSource(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateDataSourceResponse $updateDataSource)
    {
        $this->updateDataSource = $updateDataSource;
    }
    /**
     * @return UpdateDataSourceResponse
     */
    public function getUpdateDataSource()
    {
        return $this->updateDataSource;
    }
    /**
     * @param UpdateDeveloperMetadataResponse
     */
    public function setUpdateDeveloperMetadata(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateDeveloperMetadataResponse $updateDeveloperMetadata)
    {
        $this->updateDeveloperMetadata = $updateDeveloperMetadata;
    }
    /**
     * @return UpdateDeveloperMetadataResponse
     */
    public function getUpdateDeveloperMetadata()
    {
        return $this->updateDeveloperMetadata;
    }
    /**
     * @param UpdateEmbeddedObjectPositionResponse
     */
    public function setUpdateEmbeddedObjectPosition(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\UpdateEmbeddedObjectPositionResponse $updateEmbeddedObjectPosition)
    {
        $this->updateEmbeddedObjectPosition = $updateEmbeddedObjectPosition;
    }
    /**
     * @return UpdateEmbeddedObjectPositionResponse
     */
    public function getUpdateEmbeddedObjectPosition()
    {
        return $this->updateEmbeddedObjectPosition;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Response::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_Response');
