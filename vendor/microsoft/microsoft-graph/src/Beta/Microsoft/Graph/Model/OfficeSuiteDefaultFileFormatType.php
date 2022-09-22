<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeSuiteDefaultFileFormatType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* OfficeSuiteDefaultFileFormatType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeSuiteDefaultFileFormatType extends Enum
{
    /**
    * The Enum OfficeSuiteDefaultFileFormatType
    */
    const NOT_CONFIGURED = "notConfigured";
    const OFFICE_OPEN_XML_FORMAT = "officeOpenXMLFormat";
    const OFFICE_OPEN_DOCUMENT_FORMAT = "officeOpenDocumentFormat";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
