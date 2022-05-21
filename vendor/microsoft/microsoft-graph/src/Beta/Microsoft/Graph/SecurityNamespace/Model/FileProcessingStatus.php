<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileProcessingStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* FileProcessingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileProcessingStatus extends Enum
{
    /**
    * The Enum FileProcessingStatus
    */
    const SUCCESS = "success";
    const INTERNAL_ERROR = "internalError";
    const UNKNOWN_ERROR = "unknownError";
    const PROCESSING_TIMEOUT = "processingTimeout";
    const INVALID_FILE_ID = "invalidFileId";
    const FILE_SIZE_IS_ZERO = "fileSizeIsZero";
    const FILE_SIZE_IS_TOO_LARGE = "fileSizeIsTooLarge";
    const FILE_DEPTH_LIMIT_EXCEEDED = "fileDepthLimitExceeded";
    const FILE_BODY_IS_TOO_LONG = "fileBodyIsTooLong";
    const FILE_TYPE_IS_UNKNOWN = "fileTypeIsUnknown";
    const FILE_TYPE_IS_NOT_SUPPORTED = "fileTypeIsNotSupported";
    const MALFORMED_FILE = "malformedFile";
    const PROTECTED_FILE = "protectedFile";
    const POISON_FILE = "poisonFile";
    const NO_REVIEW_SET_SUMMARY_GENERATED = "noReviewSetSummaryGenerated";
    const EXTRACTION_EXCEPTION = "extractionException";
    const OCR_PROCESSING_TIMEOUT = "ocrProcessingTimeout";
    const OCR_FILE_SIZE_EXCEEDS_LIMIT = "ocrFileSizeExceedsLimit";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
