<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CatalogContent File
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
* CatalogContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CatalogContent extends DeployableContent
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.windowsUpdates.catalogContent");
    }


    /**
    * Gets the catalogEntry
    *
    * @return CatalogEntry|null The catalogEntry
    */
    public function getCatalogEntry()
    {
        if (array_key_exists("catalogEntry", $this->_propDict)) {
            if (is_a($this->_propDict["catalogEntry"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\CatalogEntry") || is_null($this->_propDict["catalogEntry"])) {
                return $this->_propDict["catalogEntry"];
            } else {
                $this->_propDict["catalogEntry"] = new CatalogEntry($this->_propDict["catalogEntry"]);
                return $this->_propDict["catalogEntry"];
            }
        }
        return null;
    }

    /**
    * Sets the catalogEntry
    *
    * @param CatalogEntry $val The value to assign to the catalogEntry
    *
    * @return CatalogContent The CatalogContent
    */
    public function setCatalogEntry($val)
    {
        $this->_propDict["catalogEntry"] = $val;
         return $this;
    }
}
