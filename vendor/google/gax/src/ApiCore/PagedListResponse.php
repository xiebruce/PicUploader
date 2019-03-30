<?php
/*
 * Copyright 2016, Google Inc.
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
namespace Google\ApiCore;

use Generator;

/**
 * Response object for paged results from a list API method
 *
 * The PagedListResponse object is returned by API methods that implement
 * pagination, and makes it easier to access multiple pages of results
 * without having to manually manipulate page tokens. Pages are retrieved
 * lazily, with additional API calls being made as additional results
 * are required.
 *
 * The list elements can be accessed in the following ways:
 *  - As a single iterable using the iterateAllElements method
 *  - As pages of elements, using the getPage and iteratePages methods
 *  - As fixed size collections of elements, using the
 *    getFixedSizeCollection and iterateFixedSizeCollections methods
 */
class PagedListResponse
{
    private $firstPage;

    /**
     * PagedListResponse constructor.
     *
     * @param Page $firstPage A page containing response details.
     */
    public function __construct(
        Page $firstPage
    ) {
        $this->firstPage = $firstPage;
    }

    /**
     * Returns an iterator over the full list of elements. Elements
     * of the list are retrieved lazily using the underlying API.
     *
     * @return Generator
     */
    public function iterateAllElements()
    {
        foreach ($this->iteratePages() as $page) {
            foreach ($page as $element) {
                yield $element;
            }
        }
    }

    /**
     * Return the current page of results.
     *
     * @return Page
     */
    public function getPage()
    {
        return $this->firstPage;
    }

    /**
     * Returns an iterator over pages of results. The pages are
     * retrieved lazily from the underlying API.
     *
     * @return Page[]
     */
    public function iteratePages()
    {
        return $this->getPage()->iteratePages();
    }

    /**
     * Returns a collection of elements with a fixed size set by
     * the collectionSize parameter. The collection will only contain
     * fewer than collectionSize elements if there are no more
     * pages to be retrieved from the server.
     *
     * NOTE: it is an error to call this method if an optional parameter
     * to set the page size is not supported or has not been set in the
     * original API call. It is also an error if the collectionSize parameter
     * is less than the page size that has been set.
     *
     * @param $collectionSize int
     * @throws ValidationException if a FixedSizeCollection of the specified size cannot be constructed
     * @return FixedSizeCollection
     */
    public function expandToFixedSizeCollection($collectionSize)
    {
        return $this->getPage()->expandToFixedSizeCollection($collectionSize);
    }

    /**
     * Returns an iterator over fixed size collections of results.
     * The collections are retrieved lazily from the underlying API.
     *
     * Each collection will have collectionSize elements, with the
     * exception of the final collection which may contain fewer
     * elements.
     *
     * NOTE: it is an error to call this method if an optional parameter
     * to set the page size is not supported or has not been set in the
     * original API call. It is also an error if the collectionSize parameter
     * is less than the page size that has been set.
     *
     * @param $collectionSize int
     * @throws ValidationException if a FixedSizeCollection of the specified size cannot be constructed
     * @return Generator|FixedSizeCollection[]
     */
    public function iterateFixedSizeCollections($collectionSize)
    {
        return $this->expandToFixedSizeCollection($collectionSize)->iterateCollections();
    }
}
