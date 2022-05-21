<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppIcon File
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
* TeamsAppIcon class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppIcon extends Entity
{
    /**
    * Gets the webUrl
    * The web URL that can be used for downloading the image.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * The web URL that can be used for downloading the image.
    *
    * @param string $val The webUrl
    *
    * @return TeamsAppIcon
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

    /**
    * Gets the hostedContent
    * The contents of the app icon if the icon is hosted within the Teams infrastructure.
    *
    * @return TeamworkHostedContent|null The hostedContent
    */
    public function getHostedContent()
    {
        if (array_key_exists("hostedContent", $this->_propDict)) {
            if (is_a($this->_propDict["hostedContent"], "\Beta\Microsoft\Graph\Model\TeamworkHostedContent") || is_null($this->_propDict["hostedContent"])) {
                return $this->_propDict["hostedContent"];
            } else {
                $this->_propDict["hostedContent"] = new TeamworkHostedContent($this->_propDict["hostedContent"]);
                return $this->_propDict["hostedContent"];
            }
        }
        return null;
    }

    /**
    * Sets the hostedContent
    * The contents of the app icon if the icon is hosted within the Teams infrastructure.
    *
    * @param TeamworkHostedContent $val The hostedContent
    *
    * @return TeamsAppIcon
    */
    public function setHostedContent($val)
    {
        $this->_propDict["hostedContent"] = $val;
        return $this;
    }

}
