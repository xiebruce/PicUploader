<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembershipOutlierInsight File
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
* MembershipOutlierInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembershipOutlierInsight extends GovernanceInsight
{
    /**
    * Gets the containerId
    * Indicates the identifier of the container, for example, a group ID.
    *
    * @return string|null The containerId
    */
    public function getContainerId()
    {
        if (array_key_exists("containerId", $this->_propDict)) {
            return $this->_propDict["containerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerId
    * Indicates the identifier of the container, for example, a group ID.
    *
    * @param string $val The containerId
    *
    * @return MembershipOutlierInsight
    */
    public function setContainerId($val)
    {
        $this->_propDict["containerId"] = $val;
        return $this;
    }

    /**
    * Gets the memberId
    * Indicates the identifier of the user.
    *
    * @return string|null The memberId
    */
    public function getMemberId()
    {
        if (array_key_exists("memberId", $this->_propDict)) {
            return $this->_propDict["memberId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the memberId
    * Indicates the identifier of the user.
    *
    * @param string $val The memberId
    *
    * @return MembershipOutlierInsight
    */
    public function setMemberId($val)
    {
        $this->_propDict["memberId"] = $val;
        return $this;
    }

    /**
    * Gets the outlierContainerType
    * Indicates the type of container. The possible values are: group, unknownFutureValue.
    *
    * @return OutlierContainerType|null The outlierContainerType
    */
    public function getOutlierContainerType()
    {
        if (array_key_exists("outlierContainerType", $this->_propDict)) {
            if (is_a($this->_propDict["outlierContainerType"], "\Beta\Microsoft\Graph\Model\OutlierContainerType") || is_null($this->_propDict["outlierContainerType"])) {
                return $this->_propDict["outlierContainerType"];
            } else {
                $this->_propDict["outlierContainerType"] = new OutlierContainerType($this->_propDict["outlierContainerType"]);
                return $this->_propDict["outlierContainerType"];
            }
        }
        return null;
    }

    /**
    * Sets the outlierContainerType
    * Indicates the type of container. The possible values are: group, unknownFutureValue.
    *
    * @param OutlierContainerType $val The outlierContainerType
    *
    * @return MembershipOutlierInsight
    */
    public function setOutlierContainerType($val)
    {
        $this->_propDict["outlierContainerType"] = $val;
        return $this;
    }

    /**
    * Gets the outlierMemberType
    * Indicates the type of outlier member. The possible values are: user, unknownFutureValue.
    *
    * @return OutlierMemberType|null The outlierMemberType
    */
    public function getOutlierMemberType()
    {
        if (array_key_exists("outlierMemberType", $this->_propDict)) {
            if (is_a($this->_propDict["outlierMemberType"], "\Beta\Microsoft\Graph\Model\OutlierMemberType") || is_null($this->_propDict["outlierMemberType"])) {
                return $this->_propDict["outlierMemberType"];
            } else {
                $this->_propDict["outlierMemberType"] = new OutlierMemberType($this->_propDict["outlierMemberType"]);
                return $this->_propDict["outlierMemberType"];
            }
        }
        return null;
    }

    /**
    * Sets the outlierMemberType
    * Indicates the type of outlier member. The possible values are: user, unknownFutureValue.
    *
    * @param OutlierMemberType $val The outlierMemberType
    *
    * @return MembershipOutlierInsight
    */
    public function setOutlierMemberType($val)
    {
        $this->_propDict["outlierMemberType"] = $val;
        return $this;
    }

    /**
    * Gets the container
    * Navigation link to the container directory object. For example, to a group.
    *
    * @return DirectoryObject|null The container
    */
    public function getContainer()
    {
        if (array_key_exists("container", $this->_propDict)) {
            if (is_a($this->_propDict["container"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["container"])) {
                return $this->_propDict["container"];
            } else {
                $this->_propDict["container"] = new DirectoryObject($this->_propDict["container"]);
                return $this->_propDict["container"];
            }
        }
        return null;
    }

    /**
    * Sets the container
    * Navigation link to the container directory object. For example, to a group.
    *
    * @param DirectoryObject $val The container
    *
    * @return MembershipOutlierInsight
    */
    public function setContainer($val)
    {
        $this->_propDict["container"] = $val;
        return $this;
    }

    /**
    * Gets the member
    * Navigation link to a member object. For example, to a user.
    *
    * @return DirectoryObject|null The member
    */
    public function getMember()
    {
        if (array_key_exists("member", $this->_propDict)) {
            if (is_a($this->_propDict["member"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["member"])) {
                return $this->_propDict["member"];
            } else {
                $this->_propDict["member"] = new DirectoryObject($this->_propDict["member"]);
                return $this->_propDict["member"];
            }
        }
        return null;
    }

    /**
    * Sets the member
    * Navigation link to a member object. For example, to a user.
    *
    * @param DirectoryObject $val The member
    *
    * @return MembershipOutlierInsight
    */
    public function setMember($val)
    {
        $this->_propDict["member"] = $val;
        return $this;
    }

}
