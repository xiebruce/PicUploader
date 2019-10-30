<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeGraphInsights File
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
* OfficeGraphInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OfficeGraphInsights extends Entity
{

     /** 
     * Gets the trending
     *
     * @return array The trending
     */
    public function getTrending()
    {
        if (array_key_exists("trending", $this->_propDict)) {
           return $this->_propDict["trending"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the trending
    *
    * @param Trending $val The trending
    *
    * @return OfficeGraphInsights
    */
    public function setTrending($val)
    {
		$this->_propDict["trending"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shared
     *
     * @return array The shared
     */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
           return $this->_propDict["shared"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shared
    *
    * @param SharedInsight $val The shared
    *
    * @return OfficeGraphInsights
    */
    public function setShared($val)
    {
		$this->_propDict["shared"] = $val;
        return $this;
    }
    

     /** 
     * Gets the used
     *
     * @return array The used
     */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
           return $this->_propDict["used"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the used
    *
    * @param UsedInsight $val The used
    *
    * @return OfficeGraphInsights
    */
    public function setUsed($val)
    {
		$this->_propDict["used"] = $val;
        return $this;
    }
    
}