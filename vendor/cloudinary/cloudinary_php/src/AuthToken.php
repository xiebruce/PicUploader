<?php

namespace Cloudinary;

/**
 * Class AuthToken
 * @package Cloudinary
 */
class AuthToken
{
    const UNSAFE = '/([ "#%&\'\/:;<=>?@\[\]^`{\|}~\\\\])/';

    /**
     *  Generate an authorization token.
     *  Options:
     *      string key - the secret key required to sign the token
     *      string ip - the IP address of the client
     *      number start_time - the start time of the token in seconds from epoch
     *      string expiration - the expiration time of the token in seconds from epoch
     *      string duration - the duration of the token (from start_time)
     *      string acl - the ACL for the token
     *      string url - the URL to authentication in case of a URL token
     *
     * @param array $options token configuration
     *
     * @return string the authorization token
     * @throws Error if both expiration and duration were not provided
     */
    public static function generate($options = array())
    {
        $key = \Cloudinary::option_get($options, "key");
        if (!isset($key)) {
            throw new \Cloudinary\Error("Missing authentication token key configuration");
        }
        $name = \Cloudinary::option_get($options, "token_name", "__cld_token__");
        $start = \Cloudinary::option_get($options, "start_time");
        $expiration = \Cloudinary::option_get($options, "expiration");
        $ip = \Cloudinary::option_get($options, "ip");
        $acl = \Cloudinary::option_get($options, "acl");
        $url = \Cloudinary::option_get($options, "url");
        $duration = \Cloudinary::option_get($options, "duration");

        if (!strcasecmp($start, "now")) {
            $start = time();
        } elseif (is_numeric($start)) {
            $start = 0 + $start;
        }
        if (!isset($expiration)) {
            if (isset($duration)) {
                $expiration = (isset($start) ? $start : time()) + $duration;
            } else {
                throw new \Cloudinary\Error("Must provide 'expiration' or 'duration'.");
            }
        }
        $token = array();
        if (isset($ip)) {
            array_push($token, "ip=$ip");
        }
        if (isset($start)) {
            array_push($token, "st=$start");
        }
        array_push($token, "exp=$expiration");
        if (isset($acl)) {
            array_push($token, "acl=" . self::escape_to_lower($acl));
        }
        $to_sign = $token;
        if (isset($url) && !isset($acl)) {
            array_push($to_sign, "url=" . self::escape_to_lower($url));
        }
        $auth = self::digest(join("~", $to_sign), $key);
        array_push($token, "hmac=$auth");

        return "$name=" . join("~", $token);
    }

    private static function digest($message, $key = null)
    {
        if (!isset($key)) {
            $key = \Cloudinary::config_get("akamai_key");
        }
        $bin_key = pack("H*", $key);

        return hash_hmac("sha256", $message, $bin_key);
    }

    private static function escape_to_lower($url)
    {
        return preg_replace_callback(self::UNSAFE, function ($match) {
            return '%'.bin2hex($match[0]);
        }, $url);
    }
}
