<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnclassifiedArtifact File
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
* UnclassifiedArtifact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnclassifiedArtifact extends Artifact
{
    /**
    * Gets the kind
    * The kind for this unclassifiedArtifact resource, describing what this value means.
    *
    * @return string|null The kind
    */
    public function getKind()
    {
        if (array_key_exists("kind", $this->_propDict)) {
            return $this->_propDict["kind"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kind
    * The kind for this unclassifiedArtifact resource, describing what this value means.
    *
    * @param string $val The kind
    *
    * @return UnclassifiedArtifact
    */
    public function setKind($val)
    {
        $this->_propDict["kind"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The value for this unclassifiedArtifact.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The value for this unclassifiedArtifact.
    *
    * @param string $val The value
    *
    * @return UnclassifiedArtifact
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

}
