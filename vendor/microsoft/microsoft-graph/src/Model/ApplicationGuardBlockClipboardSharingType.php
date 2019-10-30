<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationGuardBlockClipboardSharingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ApplicationGuardBlockClipboardSharingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ApplicationGuardBlockClipboardSharingType extends Enum
{
    /**
    * The Enum ApplicationGuardBlockClipboardSharingType
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCK_BOTH = "blockBoth";
    const BLOCK_HOST_TO_CONTAINER = "blockHostToContainer";
    const BLOCK_CONTAINER_TO_HOST = "blockContainerToHost";
    const BLOCK_NONE = "blockNone";
}