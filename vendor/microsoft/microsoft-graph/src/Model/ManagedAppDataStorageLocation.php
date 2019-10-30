<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppDataStorageLocation File
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
* ManagedAppDataStorageLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedAppDataStorageLocation extends Enum
{
    /**
    * The Enum ManagedAppDataStorageLocation
    */
    const ONE_DRIVE_FOR_BUSINESS = "oneDriveForBusiness";
    const SHARE_POINT = "sharePoint";
    const LOCAL_STORAGE = "localStorage";
}