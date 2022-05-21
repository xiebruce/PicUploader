<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* ExceptionWrapper File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Core;

use GuzzleHttp\Exception\BadResponseException;

/**
 * Class ExceptionWrapper
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class ExceptionWrapper
{
    /**
     * Wrap Guzzle BadResponseException which returns truncated exception messages for 4xx and 5xx responses.
     * Adds response body to the exception message.
     *
     * @param BadResponseException $ex
     * @return BadResponseException containing HTTP response from Graph API
     */
    public static function wrapGuzzleBadResponseException(BadResponseException $ex)
    {
        $response = $ex->getResponse();

        // Safety check for Guzzle < 7.0
        if (!$response) {
            return $ex;
        }

        /** @see \GuzzleHttp\Exception\RequestException::create() */
        if (preg_match('/^(.+: `.+ .+` resulted in a `.+ .+` response):\n/U', $ex->getMessage(), $match)) {
            $message = $match[1];

            $body = $response->getBody();

            if (!$body->isSeekable() || !$body->isReadable()) {
                return $ex;
            }

            $summary = $body->getContents();
            $body->rewind();

            if ($summary !== '') {
                $message .= ":\n{$summary}\n";

                //return new $ex($message, $ex->getRequest(), $ex->getResponse(), $ex, $ex->getHandlerContext());
                // Better: modify internal message inside original exception object (preserves the stack trace)
                (new class() extends \Exception {
                    public static function overwriteProtectedMessage(\Exception $ex, $message)
                    {
                        $ex->message = $message;
                    }
                })::overwriteProtectedMessage($ex, $message);
            }
        }

        return $ex;
    }
}
