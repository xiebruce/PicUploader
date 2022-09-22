<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantAllowOrBlockListAction File
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
* TenantAllowOrBlockListAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantAllowOrBlockListAction extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the action
    * Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
    *
    * @return TenantAllowBlockListAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\TenantAllowBlockListAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new TenantAllowBlockListAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
    *
    * @param TenantAllowBlockListAction $val The value to assign to the action
    *
    * @return TenantAllowOrBlockListAction The TenantAllowOrBlockListAction
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the expirationDateTime
    * Specifies when the tenant allow-block-list expires in date time.
    *
    * @return \DateTime|null The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime") || is_null($this->_propDict["expirationDateTime"])) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * Specifies when the tenant allow-block-list expires in date time.
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return TenantAllowOrBlockListAction The TenantAllowOrBlockListAction
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the note
    * Specifies the note added to the tenant allow block list entry in the format of string.
    *
    * @return string|null The note
    */
    public function getNote()
    {
        if (array_key_exists("note", $this->_propDict)) {
            return $this->_propDict["note"];
        } else {
            return null;
        }
    }

    /**
    * Sets the note
    * Specifies the note added to the tenant allow block list entry in the format of string.
    *
    * @param string $val The value of the note
    *
    * @return TenantAllowOrBlockListAction
    */
    public function setNote($val)
    {
        $this->_propDict["note"] = $val;
        return $this;
    }

    /**
    * Gets the results
    * Contains the result of the submission that lead to the tenant allow-block-list entry creation.
    *
    * @return TenantAllowBlockListEntryResult|null The results
    */
    public function getResults()
    {
        if (array_key_exists("results", $this->_propDict)) {
            if (is_a($this->_propDict["results"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\TenantAllowBlockListEntryResult") || is_null($this->_propDict["results"])) {
                return $this->_propDict["results"];
            } else {
                $this->_propDict["results"] = new TenantAllowBlockListEntryResult($this->_propDict["results"]);
                return $this->_propDict["results"];
            }
        }
        return null;
    }

    /**
    * Sets the results
    * Contains the result of the submission that lead to the tenant allow-block-list entry creation.
    *
    * @param TenantAllowBlockListEntryResult $val The value to assign to the results
    *
    * @return TenantAllowOrBlockListAction The TenantAllowOrBlockListAction
    */
    public function setResults($val)
    {
        $this->_propDict["results"] = $val;
         return $this;
    }
}
