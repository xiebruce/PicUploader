<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetManager File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* TargetManager class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetManager extends SubjectSet
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.targetManager");
    }

    /**
    * Gets the managerLevel
    * Manager level, between 1 and 4. The direct manager is 1.
    *
    * @return int|null The managerLevel
    */
    public function getManagerLevel()
    {
        if (array_key_exists("managerLevel", $this->_propDict)) {
            return $this->_propDict["managerLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managerLevel
    * Manager level, between 1 and 4. The direct manager is 1.
    *
    * @param int $val The value of the managerLevel
    *
    * @return TargetManager
    */
    public function setManagerLevel($val)
    {
        $this->_propDict["managerLevel"] = $val;
        return $this;
    }
}
