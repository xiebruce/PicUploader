<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadIndustry File
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
* PayloadIndustry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadIndustry extends Enum
{
    /**
    * The Enum PayloadIndustry
    */
    const UNKNOWN = "unknown";
    const OTHER = "other";
    const BANKING = "banking";
    const BUSINESS_SERVICES = "businessServices";
    const CONSUMER_SERVICES = "consumerServices";
    const EDUCATION = "education";
    const ENERGY = "energy";
    const CONSTRUCTION = "construction";
    const CONSULTING = "consulting";
    const FINANCIAL_SERVICES = "financialServices";
    const GOVERNMENT = "government";
    const HOSPITALITY = "hospitality";
    const INSURANCE = "insurance";
    const LEGAL = "legal";
    const COURIER_SERVICES = "courierServices";
    const IT = "iT";
    const HEALTHCARE = "healthcare";
    const MANUFACTURING = "manufacturing";
    const RETAIL = "retail";
    const TELECOM = "telecom";
    const REAL_ESTATE = "realEstate";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
