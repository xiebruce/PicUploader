<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionLabel File
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
* RetentionLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionLabel extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the actionAfterRetentionPeriod
    * Specifies the action to take on a document with this label applied during the retention period. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
    *
    * @return ActionAfterRetentionPeriod|null The actionAfterRetentionPeriod
    */
    public function getActionAfterRetentionPeriod()
    {
        if (array_key_exists("actionAfterRetentionPeriod", $this->_propDict)) {
            if (is_a($this->_propDict["actionAfterRetentionPeriod"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ActionAfterRetentionPeriod") || is_null($this->_propDict["actionAfterRetentionPeriod"])) {
                return $this->_propDict["actionAfterRetentionPeriod"];
            } else {
                $this->_propDict["actionAfterRetentionPeriod"] = new ActionAfterRetentionPeriod($this->_propDict["actionAfterRetentionPeriod"]);
                return $this->_propDict["actionAfterRetentionPeriod"];
            }
        }
        return null;
    }

    /**
    * Sets the actionAfterRetentionPeriod
    * Specifies the action to take on a document with this label applied during the retention period. The possible values are: none, delete, startDispositionReview, unknownFutureValue.
    *
    * @param ActionAfterRetentionPeriod $val The actionAfterRetentionPeriod
    *
    * @return RetentionLabel
    */
    public function setActionAfterRetentionPeriod($val)
    {
        $this->_propDict["actionAfterRetentionPeriod"] = $val;
        return $this;
    }

    /**
    * Gets the behaviorDuringRetentionPeriod
    * Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
    *
    * @return BehaviorDuringRetentionPeriod|null The behaviorDuringRetentionPeriod
    */
    public function getBehaviorDuringRetentionPeriod()
    {
        if (array_key_exists("behaviorDuringRetentionPeriod", $this->_propDict)) {
            if (is_a($this->_propDict["behaviorDuringRetentionPeriod"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\BehaviorDuringRetentionPeriod") || is_null($this->_propDict["behaviorDuringRetentionPeriod"])) {
                return $this->_propDict["behaviorDuringRetentionPeriod"];
            } else {
                $this->_propDict["behaviorDuringRetentionPeriod"] = new BehaviorDuringRetentionPeriod($this->_propDict["behaviorDuringRetentionPeriod"]);
                return $this->_propDict["behaviorDuringRetentionPeriod"];
            }
        }
        return null;
    }

    /**
    * Sets the behaviorDuringRetentionPeriod
    * Specifies how the behavior of a document with this label should be during the retention period. The possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue.
    *
    * @param BehaviorDuringRetentionPeriod $val The behaviorDuringRetentionPeriod
    *
    * @return RetentionLabel
    */
    public function setBehaviorDuringRetentionPeriod($val)
    {
        $this->_propDict["behaviorDuringRetentionPeriod"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Represents the user who created the retentionLabel.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Represents the user who created the retentionLabel.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return RetentionLabel
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Represents the date and time in which the retentionLabel is created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Represents the date and time in which the retentionLabel is created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return RetentionLabel
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the defaultRecordBehavior
    * Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
    *
    * @return DefaultRecordBehavior|null The defaultRecordBehavior
    */
    public function getDefaultRecordBehavior()
    {
        if (array_key_exists("defaultRecordBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["defaultRecordBehavior"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DefaultRecordBehavior") || is_null($this->_propDict["defaultRecordBehavior"])) {
                return $this->_propDict["defaultRecordBehavior"];
            } else {
                $this->_propDict["defaultRecordBehavior"] = new DefaultRecordBehavior($this->_propDict["defaultRecordBehavior"]);
                return $this->_propDict["defaultRecordBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultRecordBehavior
    * Specifies the locked or unlocked state of a record label when it is created.The possible values are: startLocked, startUnlocked, unknownFutureValue.
    *
    * @param DefaultRecordBehavior $val The defaultRecordBehavior
    *
    * @return RetentionLabel
    */
    public function setDefaultRecordBehavior($val)
    {
        $this->_propDict["defaultRecordBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the descriptionForAdmins
    * Provides label information for the admin. Optional.
    *
    * @return string|null The descriptionForAdmins
    */
    public function getDescriptionForAdmins()
    {
        if (array_key_exists("descriptionForAdmins", $this->_propDict)) {
            return $this->_propDict["descriptionForAdmins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the descriptionForAdmins
    * Provides label information for the admin. Optional.
    *
    * @param string $val The descriptionForAdmins
    *
    * @return RetentionLabel
    */
    public function setDescriptionForAdmins($val)
    {
        $this->_propDict["descriptionForAdmins"] = $val;
        return $this;
    }

    /**
    * Gets the descriptionForUsers
    * Provides the label information for the user. Optional.
    *
    * @return string|null The descriptionForUsers
    */
    public function getDescriptionForUsers()
    {
        if (array_key_exists("descriptionForUsers", $this->_propDict)) {
            return $this->_propDict["descriptionForUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the descriptionForUsers
    * Provides the label information for the user. Optional.
    *
    * @param string $val The descriptionForUsers
    *
    * @return RetentionLabel
    */
    public function setDescriptionForUsers($val)
    {
        $this->_propDict["descriptionForUsers"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Unique string that defines a label name.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Unique string that defines a label name.
    *
    * @param string $val The displayName
    *
    * @return RetentionLabel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isInUse
    * Specifies whether the label is currently being used.
    *
    * @return bool|null The isInUse
    */
    public function getIsInUse()
    {
        if (array_key_exists("isInUse", $this->_propDict)) {
            return $this->_propDict["isInUse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInUse
    * Specifies whether the label is currently being used.
    *
    * @param bool $val The isInUse
    *
    * @return RetentionLabel
    */
    public function setIsInUse($val)
    {
        $this->_propDict["isInUse"] = boolval($val);
        return $this;
    }

    /**
    * Gets the labelToBeApplied
    * Specifies the replacement label to be applied automatically after the retention period of the current label ends.
    *
    * @return string|null The labelToBeApplied
    */
    public function getLabelToBeApplied()
    {
        if (array_key_exists("labelToBeApplied", $this->_propDict)) {
            return $this->_propDict["labelToBeApplied"];
        } else {
            return null;
        }
    }

    /**
    * Sets the labelToBeApplied
    * Specifies the replacement label to be applied automatically after the retention period of the current label ends.
    *
    * @param string $val The labelToBeApplied
    *
    * @return RetentionLabel
    */
    public function setLabelToBeApplied($val)
    {
        $this->_propDict["labelToBeApplied"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The user who last modified the retentionLabel.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The user who last modified the retentionLabel.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return RetentionLabel
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The latest date time when the retentionLabel was modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The latest date time when the retentionLabel was modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return RetentionLabel
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the retentionDuration
    * Specifies the number of days to retain the content.
    *
    * @return RetentionDuration|null The retentionDuration
    */
    public function getRetentionDuration()
    {
        if (array_key_exists("retentionDuration", $this->_propDict)) {
            if (is_a($this->_propDict["retentionDuration"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RetentionDuration") || is_null($this->_propDict["retentionDuration"])) {
                return $this->_propDict["retentionDuration"];
            } else {
                $this->_propDict["retentionDuration"] = new RetentionDuration($this->_propDict["retentionDuration"]);
                return $this->_propDict["retentionDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the retentionDuration
    * Specifies the number of days to retain the content.
    *
    * @param RetentionDuration $val The retentionDuration
    *
    * @return RetentionLabel
    */
    public function setRetentionDuration($val)
    {
        $this->_propDict["retentionDuration"] = $val;
        return $this;
    }

    /**
    * Gets the retentionTrigger
    * Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
    *
    * @return RetentionTrigger|null The retentionTrigger
    */
    public function getRetentionTrigger()
    {
        if (array_key_exists("retentionTrigger", $this->_propDict)) {
            if (is_a($this->_propDict["retentionTrigger"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RetentionTrigger") || is_null($this->_propDict["retentionTrigger"])) {
                return $this->_propDict["retentionTrigger"];
            } else {
                $this->_propDict["retentionTrigger"] = new RetentionTrigger($this->_propDict["retentionTrigger"]);
                return $this->_propDict["retentionTrigger"];
            }
        }
        return null;
    }

    /**
    * Sets the retentionTrigger
    * Specifies whether the retention duration is calculated from the content creation date, labeled date, or last modification date. The possible values are: dateLabeled, dateCreated, dateModified, dateOfEvent, unknownFutureValue.
    *
    * @param RetentionTrigger $val The retentionTrigger
    *
    * @return RetentionLabel
    */
    public function setRetentionTrigger($val)
    {
        $this->_propDict["retentionTrigger"] = $val;
        return $this;
    }


     /**
     * Gets the dispositionReviewStages
    * Review stages during which reviewers are notified to determine whether a document must be deleted or retained.
     *
     * @return array|null The dispositionReviewStages
     */
    public function getDispositionReviewStages()
    {
        if (array_key_exists("dispositionReviewStages", $this->_propDict)) {
           return $this->_propDict["dispositionReviewStages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dispositionReviewStages
    * Review stages during which reviewers are notified to determine whether a document must be deleted or retained.
    *
    * @param DispositionReviewStage[] $val The dispositionReviewStages
    *
    * @return RetentionLabel
    */
    public function setDispositionReviewStages($val)
    {
        $this->_propDict["dispositionReviewStages"] = $val;
        return $this;
    }

    /**
    * Gets the retentionEventType
    *
    * @return RetentionEventType|null The retentionEventType
    */
    public function getRetentionEventType()
    {
        if (array_key_exists("retentionEventType", $this->_propDict)) {
            if (is_a($this->_propDict["retentionEventType"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RetentionEventType") || is_null($this->_propDict["retentionEventType"])) {
                return $this->_propDict["retentionEventType"];
            } else {
                $this->_propDict["retentionEventType"] = new RetentionEventType($this->_propDict["retentionEventType"]);
                return $this->_propDict["retentionEventType"];
            }
        }
        return null;
    }

    /**
    * Sets the retentionEventType
    *
    * @param RetentionEventType $val The retentionEventType
    *
    * @return RetentionLabel
    */
    public function setRetentionEventType($val)
    {
        $this->_propDict["retentionEventType"] = $val;
        return $this;
    }

}
