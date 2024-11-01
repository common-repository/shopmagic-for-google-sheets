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

class DataSourceObjectReference extends \ShopMagicGoogleSheetsVendor\Google\Model
{
    /**
     * @var int
     */
    public $chartId;
    protected $dataSourceFormulaCellType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate::class;
    protected $dataSourceFormulaCellDataType = '';
    protected $dataSourcePivotTableAnchorCellType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate::class;
    protected $dataSourcePivotTableAnchorCellDataType = '';
    protected $dataSourceTableAnchorCellType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate::class;
    protected $dataSourceTableAnchorCellDataType = '';
    /**
     * @var string
     */
    public $sheetId;
    /**
     * @param int
     */
    public function setChartId($chartId)
    {
        $this->chartId = $chartId;
    }
    /**
     * @return int
     */
    public function getChartId()
    {
        return $this->chartId;
    }
    /**
     * @param GridCoordinate
     */
    public function setDataSourceFormulaCell(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate $dataSourceFormulaCell)
    {
        $this->dataSourceFormulaCell = $dataSourceFormulaCell;
    }
    /**
     * @return GridCoordinate
     */
    public function getDataSourceFormulaCell()
    {
        return $this->dataSourceFormulaCell;
    }
    /**
     * @param GridCoordinate
     */
    public function setDataSourcePivotTableAnchorCell(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate $dataSourcePivotTableAnchorCell)
    {
        $this->dataSourcePivotTableAnchorCell = $dataSourcePivotTableAnchorCell;
    }
    /**
     * @return GridCoordinate
     */
    public function getDataSourcePivotTableAnchorCell()
    {
        return $this->dataSourcePivotTableAnchorCell;
    }
    /**
     * @param GridCoordinate
     */
    public function setDataSourceTableAnchorCell(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\GridCoordinate $dataSourceTableAnchorCell)
    {
        $this->dataSourceTableAnchorCell = $dataSourceTableAnchorCell;
    }
    /**
     * @return GridCoordinate
     */
    public function getDataSourceTableAnchorCell()
    {
        return $this->dataSourceTableAnchorCell;
    }
    /**
     * @param string
     */
    public function setSheetId($sheetId)
    {
        $this->sheetId = $sheetId;
    }
    /**
     * @return string
     */
    public function getSheetId()
    {
        return $this->sheetId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\DataSourceObjectReference::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_DataSourceObjectReference');
