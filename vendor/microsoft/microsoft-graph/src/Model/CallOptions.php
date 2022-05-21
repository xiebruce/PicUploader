<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallOptions File
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
* CallOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallOptions extends Entity
{
    /**
    * Gets the hideBotAfterEscalation
    *
    * @return bool|null The hideBotAfterEscalation
    */
    public function getHideBotAfterEscalation()
    {
        if (array_key_exists("hideBotAfterEscalation", $this->_propDict)) {
            return $this->_propDict["hideBotAfterEscalation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideBotAfterEscalation
    *
    * @param bool $val The value of the hideBotAfterEscalation
    *
    * @return CallOptions
    */
    public function setHideBotAfterEscalation($val)
    {
        $this->_propDict["hideBotAfterEscalation"] = $val;
        return $this;
    }
}
