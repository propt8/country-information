Country Information

## Installation

Package is available on [Packagist](https://packagist.org/packages/propt8/country-information),
you can install it using [Composer](http://getcomposer.org).

```shell
composer require propt8/country-information
```

### Dependencies

- PHP 7.1+

## Basic usage

```php
use propt8\Country\Country;

Country::countryName('Lithuania'); // return CountryInformationEntity

Country::countryCode('LT'); // return CountryInformationEntity

Country::countryAlpha3Code('LTU'); // return CountryInformationEntity

Country::countryCode('LT')->toArray();
```

```
Data sample:
{
  "country_name": "Lithuania",
  "country_code": "LT",
  "country_alpha3_code": "LTU",
  "country_numeric_code": 440,
  "capital": "Vilnius",
  "country_demonym": "Lithuanians",
  "total_area": 65300,
  "population": 2876475,
  "idd_code": "370",
  "currency_code": "LTL",
  "currency_name": "Lithuanian Litas",
  "currency_symbol": "Lt",
  "lang_code": "LT",
  "lang_name": "Lithuanian",
  "cctld": "lt"
}
```