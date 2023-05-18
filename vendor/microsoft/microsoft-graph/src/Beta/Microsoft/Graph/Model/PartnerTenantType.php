<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PartnerTenantType File
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
* PartnerTenantType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PartnerTenantType extends Enum
{
    /**
    * The Enum PartnerTenantType
    */
    const MICROSOFT_SUPPORT = "microsoftSupport";
    const SYNDICATE_PARTNER = "syndicatePartner";
    const BREADTH_PARTNER = "breadthPartner";
    const BREADTH_PARTNER_DELEGATED_ADMIN = "breadthPartnerDelegatedAdmin";
    const RESELLER_PARTNER_DELEGATED_ADMIN = "resellerPartnerDelegatedAdmin";
    const VALUE_ADDED_RESELLER_PARTNER_DELEGATED_ADMIN = "valueAddedResellerPartnerDelegatedAdmin";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
