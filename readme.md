# KTP NIK Parser

Check National Identity Number to Identity gender, birth of date, and region in Indonesia.

## Installation

```bash
composer require donyahmd/ktp-parser
```

## Usage

```php
<?php

use Donyahmd\Ktp\NikParser;

$nik = '6408132511960005';
$nikParser= new NikParser();

return $nikParser->parse($nik);
```

it will return an array:

```json
{
"nik": "6408132511960005",
"province": {
    "code": "64",
    "name": "KALIMANTAN TIMUR"
},
"city": {
    "code": "6408",
    "name": "KAB. KUTAI TIMUR"
},
"district": {
    "code": "640813",
    "name": "TELUK PANDAN"
},
"date_of_birth": "25-11-1996",
"gender": 1 // 0 for female and 1 for male 
}
```

## Changelog

Date  | Log
------------- | -------------
February 2, 2021  | First Commit.
February 2, 2021  | Adding some district (Kab.Malinau, Kab. Kutai Barat, Kab. Kutai Timur, Kab. Penajam Paser Utara) in Kalimantan Timur.
February 21, 2024  | Refactor code (will be updated in future).
September 12, 2024  | Using CSV data for reading regencies.

## Support

Contact me at [hi@doniahmad.com](mailto:hi@doniahmad.com "hi@doniahmad.com").
