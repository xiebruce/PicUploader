
1.20.2 / 2023-02-09
===================

  * Fix PHP 8.2 deprecation warnings

1.20.1 / 2022-02-01
==================

  * Fix support of the lowercase response headers

1.20.0 / 2021-01-13
==================

New functionality and features
------------------------------

  * Add `download_backedup_asset` helper method
  * Add support for `metadata` parameter in `resources` Admin API

Other Changes
-------------

  * Add test helper to determine whether to test an addon
  * Update bug_report.md
  * Extract default upload prefix to a constant
  * Change test for `eval` upload parameter

1.19.0 / 2020-10-29
==================

New functionality and features
------------------------------
  * Add method `Cloudinary::download_folder`
  
Other Changes
-------------

  * Fix `upload_large` endpoint
  * Improve PHPUnit fixtures
  * Add accessibility analysis tests

1.18.0 / 2020-09-07
==================

New functionality and features
------------------------------

  * Add support for `date` in `usage` Admin API
  * Add support for `eval` API parameter
  
Other Changes
-------------

  * Fix `@see` link for `usage` Admin API
  * Fix assignment of value into previously undefined array
  * Fix detection integration test
  * Add pull request template
  * Integrate with sub-account test service
  * Add support of retries in unit tests


1.17.0 / 2020-06-07
===================

New functionality and features
------------------------------

  * Add structured metadata administration to Admin API
  * Add support for 32 char SHA-256 URL signatures
  * Add SHA-256 signature support
  * Add `accessibility_analysis` parameter support
  * Add support of PHP 7.4

Other Changes
-------------

  * Remove redundant dependencies check in `update_version` script
  * Fix `update_version` script linux compatibility
  * Add `update-only` flag to `update_version` script
  * Fix legacy autoloader on Linux
  * Update issue templates

1.16.0 / 2019-11-28
===================

New functionality and features
------------------------------

  * Add `update_metadata` Upload API.
  * Add `metadata` parameter to `upload` and `explicit` Upload APIs.

1.15.1 / 2019-10-30
===================

  * Fix `Undefined index` warning in `cl_upload_url`
  * Fix PHP7.4 deprecation warnings
  * Detect data URLs with suffix in mime type
  * Fix samples when using without composer

1.15.0 / 2019-10-02
===================

New functionality and features
------------------------------

  * Add `create_folder` admin API
  * Add `max_results` and `next_cursor` for folders APIs
  * Add `live` parameter to `create_upload_preset` and `update_upload_preset` APIs
  * Add `cinemagraph_analysis` parameter
  * Add `duration` and `initial_duration` predefined variables
  * Add `pow` transformation operator
  * Allow generating archive with multiple resource types

Other Changes
-------------

  * Fix transformations API call
  * Fix `AuthToken` `UNSAFE` invalid regex
  * Fix `normalize_expression` to ignore predefined variables
  * Validate `CLOUDINARY_URL` scheme
  * Fix travis build

1.14.0 / 2019-05-13
===================

New functionality and features
------------------------------
  * Add `delete_folder` admin API
  * Add `filename` parameter to `upload` API
  * Add `derived_next_cursor` to `resource` admin API
  * Add `SignatureVerifier` class
  * Add `force_version` option to delivery urls

Other Changes
-------------
  * Fix notice message in `generate_sprite` method
  * Fix acl and url escaping in auth_token generation
  * Ignore URL in AuthToken generation if ACL is provided
  * Fix base64 regex validation template
  * Add support of PHP 7.3
  * Improve error handling when trying to upload non-existing file.
  * Add `test_secure_distribution_from_config` unit test
  * Remove redundant quotes in `update_version.sh`

1.13.0 / 2018-12-16
===================

New functionality and features
------------------------------

  * Add custom `pre` function support
  * Add `fps` video transformation parameter
  * Add `keyframe_interval` video transformation parameter
  * Add `quality_analysis` upload parameter

Other Changes
-------------

  * Fix file extension in `upload_large`
  * Fix for Uploader.php to prevent uploads failing
  * Fix missing padding in `base64url_encode`
  * Mock upload presets tests
  * Fix `test_detection` unit test
  * Remove secure variables from travis.yml
  
1.12.0 / 2018-10-11
===================

New functionality and features
------------------------------
  * Add support of custom codecs in video tag
  * Add Google Cloud Storage protocol support in upload

Other Changes
-------------
  * Add `update_version.sh` tool
  * Rename `custom_action` to `custom_function`

1.11.1 / 2018-09-12
===================

  * Update version number in files

1.11.0 / 2018-09-07
===================

New functionality and features
------------------------------
  * Add responsive breakpoints cache
  * Add `cl_picture_tag` and `cl_source_tag` helpers
  * Add support for web assembly and lambda functions in transformations.
  * Add `font_antialiasing` and `font_hinting` text style parameters
  * Add `cl_client_hints_meta_tag` helper
  * Add support of `named` parameter in list transformations API
  * Add support of `auto` value for `start_offset` transformation parameter (#123)
  * Add `notification_url` param to the `update` method
  * Add `format` parameter to responsive breakpoints settings
  * Add legacy autoloader

Other Changes
-------------
  * Improve PSR-2 compliance + PSR-4 autoload + documentation update
  * Update `radius` transformation parameter
  * Add `base64url_encode` internal helper
  * Fix base64 encoding in urls.
  * Use `X-Unique-Upload-Id` header in `upload_large`
  * Fix sample project includes.

1.10.0 / 2018-05-10
===================

New functionality and features
------------------------------

  * Add `srcset` and `sizes` attributes to the `img` tag (#117)
  * Support special characters in public IDs, tags, etc in Admin API calls
  * Add php version to user agent (#114)
  
Other Changes
-------------
  * Fix URL-encode parts of api-uri
  * Add `test_url_encoding` unit test
  * Fix `test_transformation_cursor_results` unit test
  * Fix `test_raw_conversion` unit test
  * Fix streaming profiles cleanup after unit tests
  * Add PHPDoc to Cloudinary\Api and Exceptions
  * Update PHP version requirement

1.9.0 / 2018-03-12
==================

New functionality and features
------------------------------

  * Add `delete_derived_by_transformation` API
  * Add `remove_all_tags` to `Uploader`
  * Add `resources_by_context` to `Api`
  * Add `access_control` parameter to uploader `upload` and api `update`
  * Support remote URLs in upload_large API
  * Add `transformations` parameter to delete_resources APIs
  * Support `quality_override` param for `update` and `explicit` api
  * Adding Streaming Profile to transformation.
  * Add URL suffix support for image/authenticated, video/upload
  * Remove restriction of URL suffix in shared CDN
  * Support string $public_ids parameter in `delete_derived_by_transformation`
  * Support `0` and `0.0` in `norm_range_value` function. Fixes #64 (#97)

Other Changes
-------------

  * Improve PSR-2 compliance (#101)
  * Add `next_cursor` test of `transformation()` API
  * Add `encode_array_to_json`
  * Fix encoding of attributes and url in html tags. Fixes #87
  * Add PHP versions to TravisCI setup
  * Add a test of streaming_profile parameter
  * Fix Categorization test
  * Add `UNIQUE_TEST_ID` to test helper
  * Remove `test_auto_tagging` unit test (#95)
  * Update Readme.md for setup with composer
  * Remove unreachable code. Fixes #66

1.8.0 / 2017-05-03
==================

New functionality and features
------------------------------

  * Advanced search API
  * Add `async` parameter to upload parameters.

Other Changes
-------------

  * Update tests to use `TestHelper`
  * Add compatibility for newer PHPUnit versions

1.7.2 / 2017-04-03
==================

  * Add update ocr parameters test
  * Merge pull request #71 from jtabet/fix-floats-issue
    * Added a number_format on float values in the transformation string
  * Add ocr parameters tests
  * Fix variables order. Add variables order tests.

1.7.1 / 2017-03-13
==================

  * Update phpunit to 5.7.*
  * Update travis.yml to test 5.6 and 7.0 (matching phpunit)
  * Don't normalize negative numbers. Fixed #68.

1.7.0 / 2017-03-09
==================

New functionality and features
------------------------------

  * User defined variables
  * Add `async` parameter to upload params (#65)
  * Add `fetch` prefix to overlay path
  * Support fetch overlay underlay

Other Changes
-------------

  * Rename items and add missing variables.

1.6.2 / 2017-02-23
==================

  * Add URL authentication.
  * Rename `auth_token`. 
  * Support nested values in `CLOUDINARY_URL`
  * Fix archive test.
  * Add a test for `build_eager`.

1.6.1 / 2017-02-16
==================

  * Allow 'invalidate' param in 'delete_transformation'
  * Upgrade Travis test from 7.0 to 7.1
  * Merge pull request #61 from dragosprotung/patch-1
  * Merge pull request #63 from cloudinary/support-invalidate-in-delete-transformation
  * Deleted stub file

1.6.0 / 2017-01-30
==================

New functionality and features
------------------------------

  * Add Akamai token generator

Other Changes
-------------

  * Revert using VERSION to set USER_AGENT. Fixes #58.
  * Fix USER_AGENT version.

1.5.0 / 2017-01-19
==================

New functionality and features
------------------------------

  * New `add_context` & `remove_all_context` API
  * support suffix url for private images
  * Escape ‘|' and ‘=‘ characters in context values
  * Support ‘iw’ and ‘ih’ transformation parameters for indicating initial width or height
  * Support `to_type` parameter in `rename`

Other Changes
-------------

  * Fix folder listing test
  * Add test for {effect: art:incognito}
  * expending retrieved list of transformation to allow test to pass properly
  * Add test case for 'to_type' + fix face_coordintes exceeding image boundaries
  * Fix typo in the archive `expires_at` parameter
  * Remove `$name` from call to `list_streaming_profiles`

1.4.2 / 2016-10-28
==================

New functionality and features
------------------------------

  * Add streaming profiles API
  * Merge pull request #40 from sergey-safonov/feature/config-connection-timeout
    * Allow specify connection timeout in config

1.4.1 / 2016-08-14
==================

New functionality and features
------------------------------

  * Add `allow_missing` parameter to the archive api
  * Add `skip_transformation_name` parameter to `create_archive`.
  * Add `expire_at` parameter to `create_archive`.
  * Add `transformation` parameter to `delete_resources`.
  * Add original height and width test.
  * Allow `cloud_name` to be specified in options array
  * Add TravisCI configuration
  * Add badges to README.md
  * Add license file
  * Update sample project: use cdnjs instead of locally stored JS files and bootstrap with `cloudinary_fileupload()`.

Other Changes
-------------

  * Merge pull request #38 from RobinMalfait/patch-1
  * Merge pull request #37 from Welkio/master
  * Merge pull request #41 from DacotahHarvey
  * Fix Zip tests.
  * Add default message to assertPost, assertGet, assertPut, assertDelete. Add optional message to assertUrl.
  * Add assert helper methods.
  * Add test for `gravity: auto` parameter.
  * Use eager transformation in timeout test.
  * Remove `overwrite` test.
  * Mock `eager` test.
  * Use random number for test tag.
  * Add `url_prefix` to the tests.
  * Mock restore tests.
  * Mock upload_presets tests.
  * Mock start_at test
  * Separare `mock` to `apiMock` and `uploadMock`. Use random public_ids in API tests.
  * Update README.md

1.4.0 / 2016-06-22
==================

New functionality and features
------------------------------

  * New configuration parameter `:client_hints`
  * Enhanced auto `width` values
  * Enhanced `quality` values

Other Changes
-------------

  * Disable explicit test

1.3.2 / 2016-06-02
==================

  * Add `next_cursor` to `Api->transformation()`.
  * Remove empty parameters from `update()` calls
  * Add tests
  * Add TestHelper.php. Create new `Curl` class.
  * Use constants in tests
  * Use comma in delete resources test

1.3.1 / 2016-03-22
==================

New functionality and features
------------------------------

  * Conditional Transformations

Other Changes
-------------

  * Fix categorization test
  * Use original file name as `public_id` for server side upload (sample project).
  * Remove support for `exclusive` in `add_tag`
  * Pass parameters in body unless it's a `get` call
  * Support PHP versions before 5.4
  * Use `isset` instead of `!= NULL`

1.3.0 / 2016-01-28
==================

  * New ZIP generation API.
  * Support responsive_breakpoints upload/explicit parameter.
  * Support line_spacing text layer parameter.
  * Support array parameters in Uploader.
  * Fix layer processsing
  * Implement parametrized test for layers
  * Better escaping for , and / in text layer

1.2.0 / 2015-11-01
==================

  * Escape / in overlays
  * Support crc32 on 32-bit systems
  * Support upload_mappings API
  * Support Backup restoration API
  * Support easy overlay/underlay construction
  * Add script to update and commit new version
  * Add invalidate parameter to rename

1.1.4 / 2015-08-23
==================

  * Support passing array arguments in POST body for Uploader
  * Add test for #33 - huge id list in `add_tag` api.

1.1.3 / 2015-08-19
==================

  * Add aspect_ratio
  * Add `context` and `invalidate` to the explicit API parameters.
  * Fix timeout test and make test compatible with PHP 5.3
  * Replace CURLOPT_TIMEOUT_MS with CURLOPT_TIMEOUT as it is not supported before cURL 7.16.2.
  * Added comments specifying curl option version requirements.

1.1.2 / 2015-07-27
==================

  * Fix eager ignoring format

1.1.1 / 2015-06-2
===================


  * new format and method for USER_AGENT
  * support adding information to the USER_AGENT
  * solve bad URLs created with secure_cdn_subdomain. Resolves #28

1.1.0 / 2015-04-7
===================

  * support video tag generation and url helpers
  * support video transformation parameters: audio_codec, audio_frequency, bit_rate, video_sampling, duration, end_offset, start_offset, video_codec
  * support zoom transformation parameter
  * support ftp url
  * allow specifying request timeout
  * enable eager_async and eager_notification_url in explicit
  * change upload_large's endpoint to use upload with content_range header
  * support chunk_size in cl_upload_tag

1.0.17 / 2015-02-10
===================

  * Add a changelog
  * Add support for 'overwrite' option in upload
  * Allow root path for shared CDN

1.0.16 / 2014-12-22
===================

  * Support folder listing
  * Secure domain sharding
  * Don't sign version component
  * URL suffix and root path support
  * Support tags in upload large
  * Make call_api public

1.0.15 / 2014-11-2
===================

  * Support api_proxy parameter for setting up a proxy between the PHP client and Cloudinary
  * Fixed HHVM compatibility issue

1.0.14 / 2014-10-15
===================

  * Remove force SSLv3

1.0.13 / 2014-09-22
===================

  * Force SSLv3 when contacting the Cloudinary API
  * Support invalidation in bulk deletion req (if enabled in your account)

1.0.12 / 2014-08-24
===================

  * Support custom_coordinates is upload and update
  * Support coordinates in resource details
  * Support return_delete_token parameter in upload and cl_image_upload_tag
  * Correctly escape parentheses

1.0.11 / 2014-07-7
===================

  * Support for auto dpr, auto width and responsive width
  * Support for background_removal in upload and update

1.0.10 / 2014-04-29
===================

  * Remove closing PHP tags
  * Support upload_presets
  * Support unsigned uploads
  * Support start_at for resource listing
  * Support phash for upload and resource details
  * Better error message in case of file not found in uploader for PHP 5.5+

1.0.9 / 2014-02-26
===================

  * Admin API update method
  * Admin API listing by moderation kind and status
  * Support moderation status in admin API listing
  * Support moderation flag in upload
  * New Upload and update API parameters: moderation, ocr, raw_conversation, categorization, detection, similarity_search and auto_tagging
  * Support CLOUDINARY_URL ending with /
  * Support for uploading large raw files

1.0.8 / 2014-01-21
===================

  * Support overwrite upload parameter
  * Support specifying face coordinates in upload API
  * Support specifying context (currently alt and caption) in upload API and returning context in API
  * Support specifying allowed image formats in upload API
  * Support listing resources in admin API by multiple public IDs
  * Send User-Agent header with client library version in API request
  * Support for signed-URLs to override restricted dynamic URLs
  * Move helper methods and preloaded file to separate file and fix Composer autoload
  * Minor fixes
