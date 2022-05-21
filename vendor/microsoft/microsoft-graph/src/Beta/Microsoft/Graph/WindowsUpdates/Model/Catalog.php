<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Catalog File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* Catalog class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Catalog extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the entries
    * Lists the content that you can approve for deployment. Read-only.
     *
     * @return array|null The entries
     */
    public function getEntries()
    {
        if (array_key_exists("entries", $this->_propDict)) {
           return $this->_propDict["entries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the entries
    * Lists the content that you can approve for deployment. Read-only.
    *
    * @param CatalogEntry[] $val The entries
    *
    * @return Catalog
    */
    public function setEntries($val)
    {
        $this->_propDict["entries"] = $val;
        return $this;
    }

}
