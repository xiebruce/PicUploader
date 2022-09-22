# Changelog

All notable changes to `dropbox-api` will be documented in this file

## 1.20.1 - 2022-03-29

## What's Changed

- Fix refreshable token response by @einarsozols in https://github.com/spatie/dropbox-api/pull/100

## New Contributors

- @einarsozols made their first contribution in https://github.com/spatie/dropbox-api/pull/100

**Full Changelog**: https://github.com/spatie/dropbox-api/compare/1.20.0...1.20.1

## Unreleased

- Added refreshable token provider interface.

## 1.19.1 - 2021-07-04

- fix compability with guzzlehttp/psr7 2.0 (#91)

## 1.19.0 - 2021-06-18

- add autoRename parameter for move() method (#89)

## 1.18.0 - 2021-05-27

- add autorename option to upload method (#86)

## 1.17.1 - 2021-03-01

- allow graham-campbell/guzzle-factory v5 (#79)

## 1.17.0 - 2020-12-08

- `TokenProvider` interface for accesstokens (#76)

## 1.16.1 - 2020-11-27

- allow PHP 8

## 1.16.0 - 2020-09-25

- allow the Client to work with Dropbox business accounts

## 1.15.0 - 2020-07-09

- allow Guzzle 7 (#70)

## 1.14.0 - 2020-05-11

- add support for app authentication and no authentication

## 1.13.0 - 2020-05-03

- added `downloadZip` (#66)

## 1.12.0 - 2020-02-04

- add `search` method

## 1.11.1 - 2019-12-12

- make compatible with PHP 7.4

## 1.11.0 - 2019-07-04

- add `$response` to `BadRequest`

## 1.10.0 - 2019-07-01

- move retry stuff to package

## 1.9.0 - 2019-05-21

- make guzzle retry 5xx and 429 responses

## 1.8.0 - 2019-04-13

- add `getEndpointUrl`
- drop support for PHP 7.0

## 1.7.1 - 2019-02-13

- fix for `createSharedLinkWithSettings` with empty settings

## 1.7.0 - 2019-02-06

- add getter and setter for the access token

## 1.6.6 - 2018-07-19

- fix for piped streams

## 1.6.5 - 2018-01-15

- adjust `normalizePath` to allow id/rev/ns to be queried

## 1.6.4 - 2017-12-05

- fix max chunk size

## 1.6.1 - 2017-07-28

- fix for finishing upload session

## 1.6.0 - 2017-07-28

- add various new methods to enable chuncked uploads

## 1.5.3 - 2017-07-28

- use recommended `move_v2` method to move files

## 1.5.2 - 2017-07-17

- add missing parameters to `listSharedLinks` method

## 1.5.1 - 2017-07-17

- fix broken `revokeToken` and `getAccountInfo`

## 1.5.0 - 2017-07-11

- add `revokeToken` and `getAccountInfo`

## 1.4.0 - 2017-07-11

- add `listSharedLinks`

## 1.3.0 - 2017-07-04

- add error code to thrown exception

## 1.2.0 - 2017-04-29

- added `createSharedLinkWithSettings`

## 1.1.0 - 2017-04-22

- added `listFolderContinue`

## 1.0.1 - 2017-04-19

- Bugfix: set default value for request body

## 1.0.0 - 2017-04-19

- initial release
