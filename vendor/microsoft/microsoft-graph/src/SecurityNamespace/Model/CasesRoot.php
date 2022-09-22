<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CasesRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* CasesRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CasesRoot extends \Microsoft\Graph\Model\Entity
{

     /**
     * Gets the ediscoveryCases
     *
     * @return array|null The ediscoveryCases
     */
    public function getEdiscoveryCases()
    {
        if (array_key_exists("ediscoveryCases", $this->_propDict)) {
           return $this->_propDict["ediscoveryCases"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ediscoveryCases
    *
    * @param EdiscoveryCase[] $val The ediscoveryCases
    *
    * @return CasesRoot
    */
    public function setEdiscoveryCases($val)
    {
        $this->_propDict["ediscoveryCases"] = $val;
        return $this;
    }

}
