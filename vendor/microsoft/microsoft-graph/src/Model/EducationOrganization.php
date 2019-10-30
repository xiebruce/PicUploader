<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOrganization File
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
* EducationOrganization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationOrganization extends Entity
{
    /**
    * Gets the displayName
    * Organization display name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Organization display name.
    *
    * @param string $val The displayName
    *
    * @return EducationOrganization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Organization description.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Organization description.
    *
    * @param string $val The description
    *
    * @return EducationOrganization
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSource
    * Source where this organization was created from. The possible values are: sis, manual, unknownFutureValue.
    *
    * @return EducationExternalSource The externalSource
    */
    public function getExternalSource()
    {
        if (array_key_exists("externalSource", $this->_propDict)) {
            if (is_a($this->_propDict["externalSource"], "Microsoft\Graph\Model\EducationExternalSource")) {
                return $this->_propDict["externalSource"];
            } else {
                $this->_propDict["externalSource"] = new EducationExternalSource($this->_propDict["externalSource"]);
                return $this->_propDict["externalSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalSource
    * Source where this organization was created from. The possible values are: sis, manual, unknownFutureValue.
    *
    * @param EducationExternalSource $val The externalSource
    *
    * @return EducationOrganization
    */
    public function setExternalSource($val)
    {
        $this->_propDict["externalSource"] = $val;
        return $this;
    }
    
}