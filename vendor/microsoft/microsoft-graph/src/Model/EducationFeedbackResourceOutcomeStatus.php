<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedbackResourceOutcomeStatus File
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
* EducationFeedbackResourceOutcomeStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFeedbackResourceOutcomeStatus extends Enum
{
    /**
    * The Enum EducationFeedbackResourceOutcomeStatus
    */
    const NOT_PUBLISHED = "notPublished";
    const PENDING_PUBLISH = "pendingPublish";
    const PUBLISHED = "published";
    const FAILED_PUBLISH = "failedPublish";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
