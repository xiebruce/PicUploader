<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestEnumeratedMailboxLocation File
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
* SubjectRightsRequestEnumeratedMailboxLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestEnumeratedMailboxLocation extends SubjectRightsRequestMailboxLocation
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.subjectRightsRequestEnumeratedMailboxLocation");
    }

    /**
    * Gets the upns
    *
    * @return string|null The upns
    */
    public function getUpns()
    {
        if (array_key_exists("upns", $this->_propDict)) {
            return $this->_propDict["upns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upns
    *
    * @param string $val The value of the upns
    *
    * @return SubjectRightsRequestEnumeratedMailboxLocation
    */
    public function setUpns($val)
    {
        $this->_propDict["upns"] = $val;
        return $this;
    }
}
