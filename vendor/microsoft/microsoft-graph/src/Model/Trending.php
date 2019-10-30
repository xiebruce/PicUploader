<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Trending File
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
* Trending class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Trending extends Entity
{
    /**
    * Gets the weight
    *
    * @return float The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            return $this->_propDict["weight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the weight
    *
    * @param float $val The weight
    *
    * @return Trending
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceVisualization
    *
    * @return ResourceVisualization The resourceVisualization
    */
    public function getResourceVisualization()
    {
        if (array_key_exists("resourceVisualization", $this->_propDict)) {
            if (is_a($this->_propDict["resourceVisualization"], "Microsoft\Graph\Model\ResourceVisualization")) {
                return $this->_propDict["resourceVisualization"];
            } else {
                $this->_propDict["resourceVisualization"] = new ResourceVisualization($this->_propDict["resourceVisualization"]);
                return $this->_propDict["resourceVisualization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resourceVisualization
    *
    * @param ResourceVisualization $val The resourceVisualization
    *
    * @return Trending
    */
    public function setResourceVisualization($val)
    {
        $this->_propDict["resourceVisualization"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceReference
    *
    * @return ResourceReference The resourceReference
    */
    public function getResourceReference()
    {
        if (array_key_exists("resourceReference", $this->_propDict)) {
            if (is_a($this->_propDict["resourceReference"], "Microsoft\Graph\Model\ResourceReference")) {
                return $this->_propDict["resourceReference"];
            } else {
                $this->_propDict["resourceReference"] = new ResourceReference($this->_propDict["resourceReference"]);
                return $this->_propDict["resourceReference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resourceReference
    *
    * @param ResourceReference $val The resourceReference
    *
    * @return Trending
    */
    public function setResourceReference($val)
    {
        $this->_propDict["resourceReference"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Trending
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    *
    * @return Entity The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "Microsoft\Graph\Model\Entity")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new Entity($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    *
    * @param Entity $val The resource
    *
    * @return Trending
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}