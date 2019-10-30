<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookApplication File
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

/**
* WorkbookApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookApplication extends Entity
{
    /**
    * Gets the calculationMode
    *
    * @return string The calculationMode
    */
    public function getCalculationMode()
    {
        if (array_key_exists("calculationMode", $this->_propDict)) {
            return $this->_propDict["calculationMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the calculationMode
    *
    * @param string $val The calculationMode
    *
    * @return WorkbookApplication
    */
    public function setCalculationMode($val)
    {
        $this->_propDict["calculationMode"] = $val;
        return $this;
    }
    
}