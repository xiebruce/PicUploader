<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SupportedClaimConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SupportedClaimConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SupportedClaimConfiguration extends Entity
{
    /**
    * Gets the nameIdPolicyFormat
    *
    * @return string|null The nameIdPolicyFormat
    */
    public function getNameIdPolicyFormat()
    {
        if (array_key_exists("nameIdPolicyFormat", $this->_propDict)) {
            return $this->_propDict["nameIdPolicyFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nameIdPolicyFormat
    *
    * @param string $val The value of the nameIdPolicyFormat
    *
    * @return SupportedClaimConfiguration
    */
    public function setNameIdPolicyFormat($val)
    {
        $this->_propDict["nameIdPolicyFormat"] = $val;
        return $this;
    }
}
