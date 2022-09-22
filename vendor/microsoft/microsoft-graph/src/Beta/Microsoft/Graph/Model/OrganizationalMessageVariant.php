<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageVariant File
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
* OrganizationalMessageVariant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageVariant extends Entity
{

    /**
    * Gets the localizedTexts
    * The list of localized texts for this variant
    *
    * @return OrganizationalMessageLocalizedText|null The localizedTexts
    */
    public function getLocalizedTexts()
    {
        if (array_key_exists("localizedTexts", $this->_propDict)) {
            if (is_a($this->_propDict["localizedTexts"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageLocalizedText") || is_null($this->_propDict["localizedTexts"])) {
                return $this->_propDict["localizedTexts"];
            } else {
                $this->_propDict["localizedTexts"] = new OrganizationalMessageLocalizedText($this->_propDict["localizedTexts"]);
                return $this->_propDict["localizedTexts"];
            }
        }
        return null;
    }

    /**
    * Sets the localizedTexts
    * The list of localized texts for this variant
    *
    * @param OrganizationalMessageLocalizedText $val The value to assign to the localizedTexts
    *
    * @return OrganizationalMessageVariant The OrganizationalMessageVariant
    */
    public function setLocalizedTexts($val)
    {
        $this->_propDict["localizedTexts"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The name of the variant
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the variant
    *
    * @param string $val The value of the name
    *
    * @return OrganizationalMessageVariant
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the variantId
    * A unique identifier for this variant
    *
    * @return string|null The variantId
    */
    public function getVariantId()
    {
        if (array_key_exists("variantId", $this->_propDict)) {
            return $this->_propDict["variantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the variantId
    * A unique identifier for this variant
    *
    * @param string $val The value of the variantId
    *
    * @return OrganizationalMessageVariant
    */
    public function setVariantId($val)
    {
        $this->_propDict["variantId"] = $val;
        return $this;
    }
}
