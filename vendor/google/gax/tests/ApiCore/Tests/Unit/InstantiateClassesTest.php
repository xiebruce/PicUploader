<?php
/*
 * Copyright 2017, Google Inc.
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

namespace Google\ApiCore\Tests\Unit;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;
use PHPUnit\Framework\TestCase;

class InstantiateClassesTest extends TestCase
{
    use TestTrait;

    /**
     * @dataProvider classesProvider
     */
    public function testInstantiateProtobufClass($class)
    {
        if (strpos($class, 'GrpcClient') !== false) {
            $this->requiresGrpcExtension();
            $instance = new $class('dummyhostname', ['credentials' => null]);
        } else {
            $instance = new $class();
        }
        $this->assertNotNull($instance);
    }

    public function testClassesProvider()
    {
        $classes = iterator_to_array($this->classesProvider());
        $this->assertSame(132, count($classes));
        $this->assertGreaterThan(0, count($classes));
    }

    public function classesProvider()
    {
        $folder = 'src/';
        $folderLength = strlen($folder);
        $namespacePrefix = 'Google';
        $excludePatterns = [
            'ApiCore',
            'OperationsClient',
            'OperationsGapicClient',
            'OperationsGrpcClient',
        ];
        $dir = new RecursiveDirectoryIterator($folder);
        $it = new RecursiveIteratorIterator($dir);
        $reg = new RegexIterator($it, '#.+\.php$#', RecursiveRegexIterator::GET_MATCH);
        foreach ($reg as $files) {
            $file = $files[0];
            $exclude = false;
            foreach ($excludePatterns as $exclusion) {
                if (strpos($file, $exclusion) !== false) {
                    $exclude = true;
                    break;
                }
            }
            if ($exclude) {
                continue;
            }
            $unprefixedFile = substr($file, $folderLength);
            $fileWithouExtension = explode('.', $unprefixedFile)[0];
            $partialClass = str_replace("/", "\\", $fileWithouExtension);
            $class = "$namespacePrefix\\$partialClass";
            yield [$class];
        }
    }
}
