<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ValidateOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* ValidateOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ValidateOperation extends \Beta\Microsoft\Graph\Model\LongRunningOperation
{

     /**
     * Gets the errors
    * Set of errors discovered through validation.
     *
     * @return array|null The errors
     */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
           return $this->_propDict["errors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errors
    * Set of errors discovered through validation.
    *
    * @param \Beta\Microsoft\Graph\Model\PublicError[] $val The errors
    *
    * @return ValidateOperation
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
        return $this;
    }


     /**
     * Gets the warnings
    * Set of warnings discovered through validation.
     *
     * @return array|null The warnings
     */
    public function getWarnings()
    {
        if (array_key_exists("warnings", $this->_propDict)) {
           return $this->_propDict["warnings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warnings
    * Set of warnings discovered through validation.
    *
    * @param \Beta\Microsoft\Graph\Model\PublicError[] $val The warnings
    *
    * @return ValidateOperation
    */
    public function setWarnings($val)
    {
        $this->_propDict["warnings"] = $val;
        return $this;
    }

}
