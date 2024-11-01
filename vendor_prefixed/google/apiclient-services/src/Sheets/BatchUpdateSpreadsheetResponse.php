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

class BatchUpdateSpreadsheetResponse extends \ShopMagicGoogleSheetsVendor\Google\Collection
{
    protected $collection_key = 'replies';
    protected $repliesType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Response::class;
    protected $repliesDataType = 'array';
    /**
     * @var string
     */
    public $spreadsheetId;
    protected $updatedSpreadsheetType = \ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Spreadsheet::class;
    protected $updatedSpreadsheetDataType = '';
    /**
     * @param Response[]
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;
    }
    /**
     * @return Response[]
     */
    public function getReplies()
    {
        return $this->replies;
    }
    /**
     * @param string
     */
    public function setSpreadsheetId($spreadsheetId)
    {
        $this->spreadsheetId = $spreadsheetId;
    }
    /**
     * @return string
     */
    public function getSpreadsheetId()
    {
        return $this->spreadsheetId;
    }
    /**
     * @param Spreadsheet
     */
    public function setUpdatedSpreadsheet(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\Spreadsheet $updatedSpreadsheet)
    {
        $this->updatedSpreadsheet = $updatedSpreadsheet;
    }
    /**
     * @return Spreadsheet
     */
    public function getUpdatedSpreadsheet()
    {
        return $this->updatedSpreadsheet;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\ShopMagicGoogleSheetsVendor\Google\Service\Sheets\BatchUpdateSpreadsheetResponse::class, 'ShopMagicGoogleSheetsVendor\\Google_Service_Sheets_BatchUpdateSpreadsheetResponse');
