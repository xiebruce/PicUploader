# Changelog

All notable changes to `dropbox-api` will be documented in this file

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
