# CHANGELOG

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [2.1.0](https://github.com/sameday-courier/php-sdk/compare/v1.7.0...v2.1.0)

### Added

- Bug fix. Modify obsolete syntax for http_build_query() function.
- Replace obsolete lockerId param. with lockerLastMile param. and add lockerFirstMile param.

## [1.7.0](https://github.com/sameday-courier/php-sdk/compare/v1.6.0...v1.7.0)

### Added

- Add optional tax codes
- Use trait for code

## [1.6.0](https://github.com/sameday-courier/php-sdk/compare/v1.5.0...v1.6.0)

### Added

- Add cities endpoint support

## [1.5.0](https://github.com/sameday-courier/php-sdk/compare/v1.4.0...v1.5.0)

### Added

- Add lockers support

## [1.4.0](https://github.com/sameday-courier/php-sdk/compare/v1.3.1...v1.4.0)

### Added

- Add method to get estimated cost

## [1.3.1](https://github.com/sameday-courier/php-sdk/compare/v1.3.0...v1.3.1)

### Changed

- Check for valid username and password before re-authenticating

## [1.3.0](https://github.com/sameday-courier/php-sdk/compare/v1.2.0...v1.3.0)

### Added

- AWB status history
- Update post parcel response

### Changed

- City and county now accepts ids

## [1.2.0](https://github.com/sameday-courier/php-sdk/compare/v1.1.0...v1.2.0)

### Added

- Download PDF for an existing AWB

### Changed

- Removed `pdfLink` from `Sameday\Responses\SamedayPostAwbResponse`

## [1.1.0](https://github.com/sameday-courier/php-sdk/compare/v1.0.0...v1.1.0)

### Fixed

- Fix for get parcel status history response missing field
- Documentation

### Added

- Create new parcel for an existing AWB

### Changed

- Renamed `Sameday\Requests\SamedayPostAwbRequest::getParcels()` method to `getParcelsDimensions()`
- Renamed `Sameday\Requests\SamedayPostAwbRequest::setParcels()` method to `setParcelsDimensions()`
- Renamed `Sameday\Objects\Request\ParcelObject` to `Sameday\Objects\ParcelDimensionsObject`
