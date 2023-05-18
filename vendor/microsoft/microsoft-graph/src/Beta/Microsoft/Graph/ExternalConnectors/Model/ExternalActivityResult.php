<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalActivityResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ExternalActivityResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalActivityResult extends ExternalActivity
{
    /**
    * Gets the error
    * Error information that explains the failure to process an external activity.
    *
    * @return \Beta\Microsoft\Graph\Model\PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new \Beta\Microsoft\Graph\Model\PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Error information that explains the failure to process an external activity.
    *
    * @param \Beta\Microsoft\Graph\Model\PublicError $val The error
    *
    * @return ExternalActivityResult
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

}
