<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InboundOutboundPolicyConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* InboundOutboundPolicyConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InboundOutboundPolicyConfiguration extends Entity
{
    /**
    * Gets the inboundAllowed
    * Defines whether external users coming inbound are allowed.
    *
    * @return bool|null The inboundAllowed
    */
    public function getInboundAllowed()
    {
        if (array_key_exists("inboundAllowed", $this->_propDict)) {
            return $this->_propDict["inboundAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundAllowed
    * Defines whether external users coming inbound are allowed.
    *
    * @param bool $val The value of the inboundAllowed
    *
    * @return InboundOutboundPolicyConfiguration
    */
    public function setInboundAllowed($val)
    {
        $this->_propDict["inboundAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the outboundAllowed
    * Defines whether internal users are allowed to go outbound.
    *
    * @return bool|null The outboundAllowed
    */
    public function getOutboundAllowed()
    {
        if (array_key_exists("outboundAllowed", $this->_propDict)) {
            return $this->_propDict["outboundAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundAllowed
    * Defines whether internal users are allowed to go outbound.
    *
    * @param bool $val The value of the outboundAllowed
    *
    * @return InboundOutboundPolicyConfiguration
    */
    public function setOutboundAllowed($val)
    {
        $this->_propDict["outboundAllowed"] = $val;
        return $this;
    }
}
