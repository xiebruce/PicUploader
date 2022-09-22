<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalBrandingProperties File
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
* OrganizationalBrandingProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalBrandingProperties extends Entity
{
    /**
    * Gets the backgroundColor
    * Color that will appear in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
    *
    * @return string|null The backgroundColor
    */
    public function getBackgroundColor()
    {
        if (array_key_exists("backgroundColor", $this->_propDict)) {
            return $this->_propDict["backgroundColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the backgroundColor
    * Color that will appear in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
    *
    * @param string $val The backgroundColor
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBackgroundColor($val)
    {
        $this->_propDict["backgroundColor"] = $val;
        return $this;
    }

    /**
    * Gets the backgroundImage
    * Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The backgroundImage
    */
    public function getBackgroundImage()
    {
        if (array_key_exists("backgroundImage", $this->_propDict)) {
            if (is_a($this->_propDict["backgroundImage"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["backgroundImage"])) {
                return $this->_propDict["backgroundImage"];
            } else {
                $this->_propDict["backgroundImage"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["backgroundImage"]);
                return $this->_propDict["backgroundImage"];
            }
        }
        return null;
    }

    /**
    * Sets the backgroundImage
    * Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The backgroundImage
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBackgroundImage($val)
    {
        $this->_propDict["backgroundImage"] = $val;
        return $this;
    }

    /**
    * Gets the backgroundImageRelativeUrl
    * A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    *
    * @return string|null The backgroundImageRelativeUrl
    */
    public function getBackgroundImageRelativeUrl()
    {
        if (array_key_exists("backgroundImageRelativeUrl", $this->_propDict)) {
            return $this->_propDict["backgroundImageRelativeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the backgroundImageRelativeUrl
    * A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    *
    * @param string $val The backgroundImageRelativeUrl
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBackgroundImageRelativeUrl($val)
    {
        $this->_propDict["backgroundImageRelativeUrl"] = $val;
        return $this;
    }

    /**
    * Gets the bannerLogo
    * A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG no larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The bannerLogo
    */
    public function getBannerLogo()
    {
        if (array_key_exists("bannerLogo", $this->_propDict)) {
            if (is_a($this->_propDict["bannerLogo"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["bannerLogo"])) {
                return $this->_propDict["bannerLogo"];
            } else {
                $this->_propDict["bannerLogo"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["bannerLogo"]);
                return $this->_propDict["bannerLogo"];
            }
        }
        return null;
    }

    /**
    * Sets the bannerLogo
    * A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG no larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The bannerLogo
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBannerLogo($val)
    {
        $this->_propDict["bannerLogo"] = $val;
        return $this;
    }

    /**
    * Gets the bannerLogoRelativeUrl
    * A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
    *
    * @return string|null The bannerLogoRelativeUrl
    */
    public function getBannerLogoRelativeUrl()
    {
        if (array_key_exists("bannerLogoRelativeUrl", $this->_propDict)) {
            return $this->_propDict["bannerLogoRelativeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bannerLogoRelativeUrl
    * A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
    *
    * @param string $val The bannerLogoRelativeUrl
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBannerLogoRelativeUrl($val)
    {
        $this->_propDict["bannerLogoRelativeUrl"] = $val;
        return $this;
    }

    /**
    * Gets the cdnList
    * A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
    *
    * @return string|null The cdnList
    */
    public function getCdnList()
    {
        if (array_key_exists("cdnList", $this->_propDict)) {
            return $this->_propDict["cdnList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cdnList
    * A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
    *
    * @param string $val The cdnList
    *
    * @return OrganizationalBrandingProperties
    */
    public function setCdnList($val)
    {
        $this->_propDict["cdnList"] = $val;
        return $this;
    }

    /**
    * Gets the signInPageText
    * Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
    *
    * @return string|null The signInPageText
    */
    public function getSignInPageText()
    {
        if (array_key_exists("signInPageText", $this->_propDict)) {
            return $this->_propDict["signInPageText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInPageText
    * Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
    *
    * @param string $val The signInPageText
    *
    * @return OrganizationalBrandingProperties
    */
    public function setSignInPageText($val)
    {
        $this->_propDict["signInPageText"] = $val;
        return $this;
    }

    /**
    * Gets the squareLogo
    * A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG no larger than 240 x 240 pixels and no more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The squareLogo
    */
    public function getSquareLogo()
    {
        if (array_key_exists("squareLogo", $this->_propDict)) {
            if (is_a($this->_propDict["squareLogo"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["squareLogo"])) {
                return $this->_propDict["squareLogo"];
            } else {
                $this->_propDict["squareLogo"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["squareLogo"]);
                return $this->_propDict["squareLogo"];
            }
        }
        return null;
    }

    /**
    * Sets the squareLogo
    * A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG no larger than 240 x 240 pixels and no more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The squareLogo
    *
    * @return OrganizationalBrandingProperties
    */
    public function setSquareLogo($val)
    {
        $this->_propDict["squareLogo"] = $val;
        return $this;
    }

    /**
    * Gets the squareLogoRelativeUrl
    * A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    *
    * @return string|null The squareLogoRelativeUrl
    */
    public function getSquareLogoRelativeUrl()
    {
        if (array_key_exists("squareLogoRelativeUrl", $this->_propDict)) {
            return $this->_propDict["squareLogoRelativeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the squareLogoRelativeUrl
    * A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    *
    * @param string $val The squareLogoRelativeUrl
    *
    * @return OrganizationalBrandingProperties
    */
    public function setSquareLogoRelativeUrl($val)
    {
        $this->_propDict["squareLogoRelativeUrl"] = $val;
        return $this;
    }

    /**
    * Gets the usernameHintText
    * String that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
    *
    * @return string|null The usernameHintText
    */
    public function getUsernameHintText()
    {
        if (array_key_exists("usernameHintText", $this->_propDict)) {
            return $this->_propDict["usernameHintText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usernameHintText
    * String that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
    *
    * @param string $val The usernameHintText
    *
    * @return OrganizationalBrandingProperties
    */
    public function setUsernameHintText($val)
    {
        $this->_propDict["usernameHintText"] = $val;
        return $this;
    }

}
