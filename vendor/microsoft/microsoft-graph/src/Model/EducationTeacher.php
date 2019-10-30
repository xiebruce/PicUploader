<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationTeacher File
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
* EducationTeacher class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationTeacher extends Entity
{
    /**
    * Gets the teacherNumber
    * Teacher number.
    *
    * @return string The teacherNumber
    */
    public function getTeacherNumber()
    {
        if (array_key_exists("teacherNumber", $this->_propDict)) {
            return $this->_propDict["teacherNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teacherNumber
    * Teacher number.
    *
    * @param string $val The value of the teacherNumber
    *
    * @return EducationTeacher
    */
    public function setTeacherNumber($val)
    {
        $this->_propDict["teacherNumber"] = $val;
        return $this;
    }
    /**
    * Gets the externalId
    * ID of the teacher in the source system.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * ID of the teacher in the source system.
    *
    * @param string $val The value of the externalId
    *
    * @return EducationTeacher
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
}
