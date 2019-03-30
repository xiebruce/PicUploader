<?php
/*
 * Copyright 2018 Google LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Google\ApiCore\ResourceTemplate;

use Google\ApiCore\ValidationException;

/**
 * Collection of methods for parsing Segments.
 */
class Parser
{
    /**
     * Parses a path into an array of segments.
     *
     * @param string $path
     * @return array
     * @throws ValidationException
     */
    public static function parseSegments($path)
    {
        if (empty($path)) {
            throw new ValidationException("Cannot parse empty path");
        }
        $segments = [];
        $index = 0;
        $segments[] = self::parseSegmentFromPath($path, $index);
        while ($index < strlen($path)) {
            self::parseLiteralFromPath('/', $path, $index);
            $segments[] = self::parseSegmentFromPath($path, $index);
        }
        return $segments;
    }

    /**
     * Given a path and an index, reads a Segment from the path and updates
     * the index.
     *
     * @param string $path
     * @param int $index
     * @return Segment
     * @throws ValidationException
     */
    private static function parseSegmentFromPath($path, &$index)
    {
        if ($path[$index] === '{') {
            // Validate that the { has a matching }
            $closingBraceIndex = strpos($path, '}', $index);
            if ($closingBraceIndex === false) {
                throw new ValidationException(
                    "Expected '}' in path $path"
                );
            }

            $segmentStringLengthWithoutBraces = $closingBraceIndex - $index - 1;
            $segmentStringWithoutBraces = substr($path, $index + 1, $segmentStringLengthWithoutBraces);
            $index = $closingBraceIndex + 1;
            return self::parseVariableSegment($segmentStringWithoutBraces);
        } else {
            $nextSlash = strpos($path, '/', $index);
            if ($nextSlash === false) {
                $nextSlash = strlen($path);
            }
            $segmentString = substr($path, $index, $nextSlash - $index);
            $index = $nextSlash;
            return self::parse($segmentString);
        }
    }

    /**
     * @param string $segmentString
     * @return Segment
     * @throws ValidationException
     */
    private static function parse($segmentString)
    {
        if ($segmentString === '*') {
            return new Segment(Segment::WILDCARD_SEGMENT);
        } elseif ($segmentString === '**') {
            return new Segment(Segment::DOUBLE_WILDCARD_SEGMENT);
        } else {
            if (!self::isValidLiteral($segmentString)) {
                throw new ValidationException(
                    "Unexpected characters in literal segment $segmentString"
                );
            }
            return new Segment(Segment::LITERAL_SEGMENT, $segmentString);
        }
    }

    /**
     * @param string $segmentStringWithoutBraces
     * @return Segment
     * @throws ValidationException
     */
    private static function parseVariableSegment($segmentStringWithoutBraces)
    {
        // Validate there are no nested braces
        $nestedOpenBracket = strpos($segmentStringWithoutBraces, '{');
        if ($nestedOpenBracket !== false) {
            throw new ValidationException(
                "Unexpected '{' parsing segment $segmentStringWithoutBraces at index $nestedOpenBracket"
            );
        }

        $equalsIndex = strpos($segmentStringWithoutBraces, '=');
        if ($equalsIndex === false) {
            // If the variable does not contain '=', we assume the pattern is '*' as per google.rpc.Http
            $variableKey = $segmentStringWithoutBraces;
            $nestedResource = new RelativeResourceTemplate("*");
        } else {
            $variableKey = substr($segmentStringWithoutBraces, 0, $equalsIndex);
            $nestedResourceString = substr($segmentStringWithoutBraces, $equalsIndex + 1);
            $nestedResource = new RelativeResourceTemplate($nestedResourceString);
        }

        if (!self::isValidLiteral($variableKey)) {
            throw new ValidationException(
                "Unexpected characters in variable name $variableKey"
            );
        }
        return new Segment(Segment::VARIABLE_SEGMENT, null, $variableKey, $nestedResource);
    }

    /**
     * @param string $literal
     * @param string $path
     * @param int $index
     * @return string
     * @throws ValidationException
     */
    private static function parseLiteralFromPath($literal, $path, &$index)
    {
        $literalLength = strlen($literal);
        if (strlen($path) < ($index + $literalLength)) {
            throw self::parseError($literal, $path, $index);
        }
        $consumedLiteral = substr($path, $index, $literalLength);
        if ($consumedLiteral !== $literal) {
            throw self::parseError($literal, $path, $index);
        }
        $index += $literalLength;
        return $consumedLiteral;
    }

    private static function parseError($literal, $path, $index)
    {
        return new ValidationException(
            "Error parsing '$path' as index $index: " .
            "expected '$literal'"
        );
    }

    /**
     * Check if $literal is a valid segment literal. Segment literals may only contain numbers,
     * letters, and any of the following: .-~_
     *
     * @param string $literal
     * @return bool
     */
    private static function isValidLiteral($literal)
    {
        return preg_match("/^[0-9a-zA-Z\\.\\-~_]+$/", $literal) === 1;
    }
}
