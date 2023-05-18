<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Indicator File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Indicator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Indicator extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the source
    * The source that provides this indicator. The possible values are: microsoftDefenderThreatIntelligence, openSourceIntelligence, public, unknownFutureValue.
    *
    * @return IndicatorSource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\IndicatorSource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new IndicatorSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * The source that provides this indicator. The possible values are: microsoftDefenderThreatIntelligence, openSourceIntelligence, public, unknownFutureValue.
    *
    * @param IndicatorSource $val The source
    *
    * @return Indicator
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the artifact
    * The artifact related to this indicator.
    *
    * @return Artifact|null The artifact
    */
    public function getArtifact()
    {
        if (array_key_exists("artifact", $this->_propDict)) {
            if (is_a($this->_propDict["artifact"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Artifact") || is_null($this->_propDict["artifact"])) {
                return $this->_propDict["artifact"];
            } else {
                $this->_propDict["artifact"] = new Artifact($this->_propDict["artifact"]);
                return $this->_propDict["artifact"];
            }
        }
        return null;
    }

    /**
    * Sets the artifact
    * The artifact related to this indicator.
    *
    * @param Artifact $val The artifact
    *
    * @return Indicator
    */
    public function setArtifact($val)
    {
        $this->_propDict["artifact"] = $val;
        return $this;
    }

}
