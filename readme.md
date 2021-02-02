# KTP NIK Parser

Check National Identity Number to Identity gender, birth of date, and region in Indonesia.

## Installation

```bash
composer require donyahmd/ktp-nik-parser
```

## Usage

```php
<?php

use Donyahmd\KtpNikParser\NikParser;

$nik = '6408132511960005';
$nikParser= new NikParser();

return $nikParser->parse($nik);
```

it will return an array:

```code
{
"nik": "6408132511960005",
"province": {
    "code": "64",
    "name": "Kalimantan Timur"
},
"city": {
    "code": "08",
    "name": "Kabupaten Kutai Timur"
},
"district": {
    "code": "13",
    "name": "Teluk Pandan"
},
"date_of_birth": "25-11-1996",
"gender": "Male"
}
```

## Changelog

Date  | Log
------------- | -------------
February 2, 2021  | First Commit.
February 2, 2021  | Adding some district (Kab.Malinau, Kab. Kutai Barat, Kab. Kutai Timur, Kab. Penajam Paser Utara) in Kalimantan Timur.

## Support

Contact me at [donyahmd24@gmail.com](mailto:donyahmd24@gmail.com "donyahmd24@gmail.com").
