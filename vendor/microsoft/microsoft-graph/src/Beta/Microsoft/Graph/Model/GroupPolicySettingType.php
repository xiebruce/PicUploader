<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicySettingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* GroupPolicySettingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicySettingType extends Enum
{
    /**
    * The Enum GroupPolicySettingType
    */
    const UNKNOWN = "unknown";
    const POLICY = "policy";
    const ACCOUNT = "account";
    const SECURITY_OPTIONS = "securityOptions";
    const USER_RIGHTS_ASSIGNMENT = "userRightsAssignment";
    const AUDIT_SETTING = "auditSetting";
    const WINDOWS_FIREWALL_SETTINGS = "windowsFirewallSettings";
    const APP_LOCKER_RULE_COLLECTION = "appLockerRuleCollection";
    const DATA_SOURCES_SETTINGS = "dataSourcesSettings";
    const DEVICES_SETTINGS = "devicesSettings";
    const DRIVE_MAP_SETTINGS = "driveMapSettings";
    const ENVIRONMENT_VARIABLES = "environmentVariables";
    const FILES_SETTINGS = "filesSettings";
    const FOLDER_OPTIONS = "folderOptions";
    const FOLDERS = "folders";
    const INI_FILES = "iniFiles";
    const INTERNET_OPTIONS = "internetOptions";
    const LOCAL_USERS_AND_GROUPS = "localUsersAndGroups";
    const NETWORK_OPTIONS = "networkOptions";
    const NETWORK_SHARES = "networkShares";
    const NT_SERVICES = "ntServices";
    const POWER_OPTIONS = "powerOptions";
    const PRINTERS = "printers";
    const REGIONAL_OPTIONS_SETTINGS = "regionalOptionsSettings";
    const REGISTRY_SETTINGS = "registrySettings";
    const SCHEDULED_TASKS = "scheduledTasks";
    const SHORTCUT_SETTINGS = "shortcutSettings";
    const START_MENU_SETTINGS = "startMenuSettings";
}
