<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationTemplateBrandingOptions File
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
* NotificationTemplateBrandingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NotificationTemplateBrandingOptions extends Enum
{
    /**
    * The Enum NotificationTemplateBrandingOptions
    */
    const NONE = "none";
    const INCLUDE_COMPANY_LOGO = "includeCompanyLogo";
    const INCLUDE_COMPANY_NAME = "includeCompanyName";
    const INCLUDE_CONTACT_INFORMATION = "includeContactInformation";
}