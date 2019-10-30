<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UsedInsight File
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
* UsedInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UsedInsight extends Entity
{
    /**
    * Gets the lastUsed
    *
    * @return UsageDetails The lastUsed
    */
    public function getLastUsed()
    {
        if (array_key_exists("lastUsed", $this->_propDict)) {
            if (is_a($this->_propDict["lastUsed"], "Microsoft\Graph\Model\UsageDetails")) {
                return $this->_propDict["lastUsed"];
            } else {
                $this->_propDict["lastUsed"] = new UsageDetails($this->_propDict["lastUsed"]);
                return $this->_propDict["lastUsed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUsed
    *
    * @param UsageDetails $val The lastUsed
    *
    * @return UsedInsight
    */
    public function setLastUsed($val)
    {
        $this->_propDict["lastUsed"] = $val;
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
    * @return UsedInsight
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
    * @return UsedInsight
    */
    public function setResourceReference($val)
    {
        $this->_propDict["resourceReference"] = $val;
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
    * @return UsedInsight
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}