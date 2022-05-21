<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRegistrant File
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
* MeetingRegistrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingRegistrant extends MeetingRegistrantBase
{

     /**
     * Gets the customQuestionAnswers
    * The registrant's answer to custom questions.
     *
     * @return array|null The customQuestionAnswers
     */
    public function getCustomQuestionAnswers()
    {
        if (array_key_exists("customQuestionAnswers", $this->_propDict)) {
           return $this->_propDict["customQuestionAnswers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customQuestionAnswers
    * The registrant's answer to custom questions.
    *
    * @param CustomQuestionAnswer[] $val The customQuestionAnswers
    *
    * @return MeetingRegistrant
    */
    public function setCustomQuestionAnswers($val)
    {
        $this->_propDict["customQuestionAnswers"] = $val;
        return $this;
    }

    /**
    * Gets the email
    * The email address of the registrant.
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    * The email address of the registrant.
    *
    * @param string $val The email
    *
    * @return MeetingRegistrant
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the firstName
    * The first name of the registrant.
    *
    * @return string|null The firstName
    */
    public function getFirstName()
    {
        if (array_key_exists("firstName", $this->_propDict)) {
            return $this->_propDict["firstName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firstName
    * The first name of the registrant.
    *
    * @param string $val The firstName
    *
    * @return MeetingRegistrant
    */
    public function setFirstName($val)
    {
        $this->_propDict["firstName"] = $val;
        return $this;
    }

    /**
    * Gets the lastName
    * The last name of the registrant.
    *
    * @return string|null The lastName
    */
    public function getLastName()
    {
        if (array_key_exists("lastName", $this->_propDict)) {
            return $this->_propDict["lastName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastName
    * The last name of the registrant.
    *
    * @param string $val The lastName
    *
    * @return MeetingRegistrant
    */
    public function setLastName($val)
    {
        $this->_propDict["lastName"] = $val;
        return $this;
    }

    /**
    * Gets the registrationDateTime
    * Time in UTC when the registrant registers for the meeting. Read-only.
    *
    * @return \DateTime|null The registrationDateTime
    */
    public function getRegistrationDateTime()
    {
        if (array_key_exists("registrationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registrationDateTime"], "\DateTime") || is_null($this->_propDict["registrationDateTime"])) {
                return $this->_propDict["registrationDateTime"];
            } else {
                $this->_propDict["registrationDateTime"] = new \DateTime($this->_propDict["registrationDateTime"]);
                return $this->_propDict["registrationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationDateTime
    * Time in UTC when the registrant registers for the meeting. Read-only.
    *
    * @param \DateTime $val The registrationDateTime
    *
    * @return MeetingRegistrant
    */
    public function setRegistrationDateTime($val)
    {
        $this->_propDict["registrationDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The registration status of the registrant. Read-only.
    *
    * @return MeetingRegistrantStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\MeetingRegistrantStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new MeetingRegistrantStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The registration status of the registrant. Read-only.
    *
    * @param MeetingRegistrantStatus $val The status
    *
    * @return MeetingRegistrant
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
