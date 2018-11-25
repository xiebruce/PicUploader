# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## [2.2.6] - 2018-11-14

### Fixed

- Fix retry not handled correctly
- Fix count on null is no more allowed

## [2.2.5] - 2018-08-14

### Fixed

- Fix bug that is not compatible with php 7

## [2.2.4] - 2018-05-13

### Fixed

- Fix space in url converted to +

## [2.2.3] - 2017-10-30

### Added

- Add image process API
- Add advanced client of image process

### Changed

- Update snips to 0.2.15
- Force the zone ID to be lowercase

### Fixed

- Fix unit test error

## [2.2.2] - 2017-04-12

### Fixed

- Fix class autoload error while using phar

## [2.2.1] - 2017-03-14

### Changed

- Split handler from Request, use stream in req

### Fixed

- Fix query_sign error in Request

## [2.2.0] - 2017-02-27

### Added

- Add list multipart uploads API

## [2.1.2] - 2017-02-20

### Changed

- Use PsrRequest instead of Request in Builder

## [2.1.1] - 2017-02-11

### Changed

- Refactor Signer class to Request, support guzzle 5

## [2.1.0] - 2016-12-28

### Changed

- Fix signer && Builder bug
- Add more parameters to sign

### Added

- Add request parameters for GET Object
- Add IP address conditions for bucket policy

## [2.0.1] - 2016-10-14

### Changed

- Fix katzgrau/klogger require version to 1.2.1
- Update installation docs

## 2.0.0 - 2016-10-14

### Added

- Provide Official Qingstor SDK for PHP

[2.2.6]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.5...2.2.6
[2.2.5]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.4...2.2.5
[2.2.4]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.3...2.2.4
[2.2.3]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.2...2.2.3
[2.2.2]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.1...2.2.2
[2.2.1]: https://github.com/yunify/qingstor-sdk-php/compare/2.2.0...2.2.1
[2.2.0]: https://github.com/yunify/qingstor-sdk-php/compare/2.1.2...2.2.0
[2.1.2]: https://github.com/yunify/qingstor-sdk-php/compare/2.1.1...2.1.2
[2.1.1]: https://github.com/yunify/qingstor-sdk-php/compare/2.1.0...2.1.1
[2.1.0]: https://github.com/yunify/qingstor-sdk-php/compare/2.0.1...2.1.0
[2.0.1]: https://github.com/yunify/qingstor-sdk-php/compare/2.0.0...2.0.1
