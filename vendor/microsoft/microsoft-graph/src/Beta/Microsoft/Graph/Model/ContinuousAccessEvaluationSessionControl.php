<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContinuousAccessEvaluationSessionControl File
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
* ContinuousAccessEvaluationSessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContinuousAccessEvaluationSessionControl extends Entity
{

    /**
    * Gets the mode
    * Specifies continuous access evaluation settings. The possible values are: strictEnforcement, disabled, unknownFutureValue.
    *
    * @return ContinuousAccessEvaluationMode|null The mode
    */
    public function getMode()
    {
        if (array_key_exists("mode", $this->_propDict)) {
            if (is_a($this->_propDict["mode"], "\Beta\Microsoft\Graph\Model\ContinuousAccessEvaluationMode") || is_null($this->_propDict["mode"])) {
                return $this->_propDict["mode"];
            } else {
                $this->_propDict["mode"] = new ContinuousAccessEvaluationMode($this->_propDict["mode"]);
                return $this->_propDict["mode"];
            }
        }
        return null;
    }

    /**
    * Sets the mode
    * Specifies continuous access evaluation settings. The possible values are: strictEnforcement, disabled, unknownFutureValue.
    *
    * @param ContinuousAccessEvaluationMode $val The value to assign to the mode
    *
    * @return ContinuousAccessEvaluationSessionControl The ContinuousAccessEvaluationSessionControl
    */
    public function setMode($val)
    {
        $this->_propDict["mode"] = $val;
         return $this;
    }
}
