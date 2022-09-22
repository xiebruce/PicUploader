<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatSubmissionRoot File
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
* ThreatSubmissionRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThreatSubmissionRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the emailThreats
     *
     * @return array|null The emailThreats
     */
    public function getEmailThreats()
    {
        if (array_key_exists("emailThreats", $this->_propDict)) {
           return $this->_propDict["emailThreats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailThreats
    *
    * @param EmailThreatSubmission[] $val The emailThreats
    *
    * @return ThreatSubmissionRoot
    */
    public function setEmailThreats($val)
    {
        $this->_propDict["emailThreats"] = $val;
        return $this;
    }


     /**
     * Gets the emailThreatSubmissionPolicies
     *
     * @return array|null The emailThreatSubmissionPolicies
     */
    public function getEmailThreatSubmissionPolicies()
    {
        if (array_key_exists("emailThreatSubmissionPolicies", $this->_propDict)) {
           return $this->_propDict["emailThreatSubmissionPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailThreatSubmissionPolicies
    *
    * @param EmailThreatSubmissionPolicy[] $val The emailThreatSubmissionPolicies
    *
    * @return ThreatSubmissionRoot
    */
    public function setEmailThreatSubmissionPolicies($val)
    {
        $this->_propDict["emailThreatSubmissionPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the fileThreats
     *
     * @return array|null The fileThreats
     */
    public function getFileThreats()
    {
        if (array_key_exists("fileThreats", $this->_propDict)) {
           return $this->_propDict["fileThreats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileThreats
    *
    * @param FileThreatSubmission[] $val The fileThreats
    *
    * @return ThreatSubmissionRoot
    */
    public function setFileThreats($val)
    {
        $this->_propDict["fileThreats"] = $val;
        return $this;
    }


     /**
     * Gets the urlThreats
     *
     * @return array|null The urlThreats
     */
    public function getUrlThreats()
    {
        if (array_key_exists("urlThreats", $this->_propDict)) {
           return $this->_propDict["urlThreats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlThreats
    *
    * @param UrlThreatSubmission[] $val The urlThreats
    *
    * @return ThreatSubmissionRoot
    */
    public function setUrlThreats($val)
    {
        $this->_propDict["urlThreats"] = $val;
        return $this;
    }

}
