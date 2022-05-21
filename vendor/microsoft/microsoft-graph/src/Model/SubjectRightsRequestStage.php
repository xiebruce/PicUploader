<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestStage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* SubjectRightsRequestStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestStage extends Enum
{
    /**
    * The Enum SubjectRightsRequestStage
    */
    const CONTENT_RETRIEVAL = "contentRetrieval";
    const CONTENT_REVIEW = "contentReview";
    const GENERATE_REPORT = "generateReport";
    const CONTENT_DELETION = "contentDeletion";
    const CASE_RESOLVED = "caseResolved";
    const CONTENT_ESTIMATE = "contentEstimate";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
