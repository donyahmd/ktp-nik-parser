<?php

namespace Donyahmd\KtpNikParser;

trait Region
{
    private function getRegionName($provinceCode, $cityCode, $districtCode)
    {
        $regions = [
            '64' => [
                'province_name' => 'Kalimantan Timur',
                'cities' => [
                    '01' => 'Kabupaten Paser',
                    '02' => 'Kabupaten Kutai Kartanegara',
                    '03' => 'Kabupaten Berau',
                    '04' => 'Kabupaten Bulungan',
                    '05' => 'Kabupaten Nunukan',
                    '06' => [
                        'city_name' => 'Kabupaten Malinau',
                        'districts' => [
                            '01' => 'Mentarang',
                            '02' => 'Malinau Kota',
                            '03' => 'Pujungan',
                            '04' => 'Kayan Hilir',
                            '05' => 'Kayan Hulu',
                            '06' => 'Malinau Selatan',
                            '07' => 'Malinau Utara',
                            '08' => 'Malinau Barat',
                            '09' => 'Sungai Boh',
                            '10' => 'Kayan Selatan',
                            '11' => 'Bahau Hulu',
                            '12' => 'Mentarang Hulu',
                            '13' => 'Malinau Selatan Hilir',
                            '14' => 'Malinau Selatan Hulu',
                            '15' => 'Sungai Tubu',
                        ],
                    ],
                    '07' => [
                        'city_name' => 'Kabupaten Kutai Barat',
                        'districts' => [
                            '01' => 'Long Apari',
                            '02' => 'Long Pahangai',
                            '03' => 'Long Bagun',
                            '04' => 'Long Hubung',
                            '05' => 'Long Iram',
                            '06' => 'Melak',
                            '07' => 'Barong Tongkok',
                            '08' => 'Damai',
                            '09' => 'Muara Lawa',
                            '10' => 'Muara Pahu',
                            '11' => 'Jempang',
                            '12' => 'Bongan',
                            '13' => 'Penyinggahan',
                            '14' => 'Bentian Besar',
                            '15' => 'Linggang Bigung',
                            '16' => 'Nyuatan',
                            '17' => 'Siluq Ngurai',
                            '18' => 'Mook Manaar Bulatn',
                            '19' => 'Tering',
                            '20' => 'Sekolaq Darat',
                            '21' => 'Laham',
                        ],
                    ],
                    '08' => [
                        'city_name' => 'Kabupaten Kutai Timur',
                        'districts' => [
                            '01' => 'Muara Ancalong',
                            '02' => 'Muara Wahau',
                            '03' => 'Muara Bengkal',
                            '04' => 'Sangatta Utara',
                            '05' => 'Sangkulirang',
                            '06' => 'Busang',
                            '07' => 'Telen',
                            '08' => 'Kombeng',
                            '09' => 'Bengalon',
                            '10' => 'Kaliorang',
                            '11' => 'Sandaran',
                            '12' => 'Sangatta Selatan',
                            '13' => 'Teluk Pandan',
                            '14' => 'Rantau Pulung',
                            '15' => 'Kaubun',
                            '16' => 'Karangan',
                            '17' => 'Batu Ampar',
                            '18' => 'Long Mesangat',
                        ],
                    ],
                    '09' => [
                        'city_name' => 'Kabupaten Penajam Paser Utara',
                        'districts' => [
                            '01' => 'Penajam',
                            '02' => 'Waru',
                            '03' => 'Babulu',
                            '04' => 'Sepaku',
                        ],
                    ],
                    '10' => [
                        'city_name' => 'Kabupaten Tana Tidung',
                        'districts' => [
                            '01' => 'Sesayap',
                            '02' => 'Sesayap Hilir',
                            '03' => 'Tana Lia',
                            '04' => 'Betayau',
                        ],
                    ],
                    '71' => [
                        'city_name' => 'Kota Balikpapan',
                        'districts' => [
                            '01' => 'Balikpapan Timur',
                            '02' => 'Balikpapan Barat',
                            '03' => 'Balikpapan Utara',
                            '04' => 'Balikpapan Tengah',
                            '05' => 'Balikpapan Selatan',
                            '06' => 'Balikpapan Kota',
                        ],
                    ],
                    '72' => [
                        'city_name' => 'Kota Samarinda',
                        'districts' => [
                            '01' => 'Palaran',
                            '02' => 'Samarinda Seberang',
                            '03' => 'Samarinda Ulu',
                            '04' => 'Samarinda Ilir',
                            '05' => 'Samarinda Utara',
                            '06' => 'Sungai Kunjang',
                            '07' => 'Sambutan',
                            '08' => 'Sungai Pinang',
                            '09' => 'Samarinda Kota',
                            '10' => 'Loa Janan Ilir',
                        ],
                    ],
                    '73' => [
                        'city_name' => 'Kota Tarakan',
                        'districts' => [
                            '01' => 'Tarakan Barat',
                            '02' => 'Tarakan Tengah',
                            '03' => 'Tarakan Timur',
                            '04' => 'Tarakan Utara',
                        ],
                    ],
                    '74' => [
                        'city_name' => 'Kota Bontang',
                        'districts' => [
                            '01' => 'Bontang Utara',
                            '02' => 'Bontang Selatan',
                            '03' => 'Bontang Barat',
                        ],
                    ],
                ],
            ],
        ];

        $provinceName = $regions[$provinceCode]['province_name'] ?? null;
        $cityName = $regions[$provinceCode]['cities'][$cityCode] ?? null;
        $districtName = null;
        if (is_array($cityName)) {
            $districtName = $cityName['districts'][$districtCode] ?? null;
            $cityName = $cityName['city_name'];
        }

        return [
            'province_name' => $provinceName,
            'city_name'     => $cityName,
            'district_name' => $districtName
        ];
    }
}
