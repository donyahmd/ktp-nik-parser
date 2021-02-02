<?php

namespace Donyahmd\KtpNikParser;

trait Region
{
    private function getRegionName($provinceCode, $cityCode, $districtCode)
    {
        $provinceName = null;
        $cityName = null;
        $districtName = null;

        switch ($provinceCode) {
            case '64':
                $provinceName = 'Kalimantan Timur';
                switch ($cityCode) {
                    case '01':
                        $cityName = 'Kabupaten Paser';
                        break;
                    case '02':
                        $cityName = 'Kabupaten Kutai Kartanegara';
                        break;
                    case '03':
                        $cityName = 'Kabupaten Berau';
                        break;
                    case '04':
                        $cityName = 'Kabupaten Bulungan';
                        break;
                    case '05':
                        $cityName = 'Kabupaten Nunukan';
                        break;
                    case '06':
                        $cityName = 'Kabupaten Malinau';
                        break;
                    case '07':
                        $cityName = 'Kabupaten Kutai Barat';
                        break;
                    case '08':
                        $cityName = 'Kabupaten Kutai Timur';
                        break;
                    case '09':
                        $cityName = 'Kabupaten Penajam Paser Utara';
                        break;
                    case '10':
                        $cityName = 'Kabupaten Tana Tidung';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Sesayap';
                                break;
                            case '02':
                                $districtName = 'Sesayap Hilir';
                                break;
                            case '03':
                                $districtName = 'Tana Lia';
                                break;
                            case '04':
                                $districtName = 'Betayau';
                                break;
                        }
                        break;
                    case '71':
                        $cityName = 'Kota Balikpapan';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Balikpapan Timur';
                                break;
                            case '02':
                                $districtName = 'Balikpapan Barat';
                                break;
                            case '03':
                                $districtName = 'Balikpapan Utara';
                                break;
                            case '04':
                                $districtName = 'Balikpapan Tengah';
                                break;
                            case '05':
                                $districtName = 'Balikpapan Selatan';
                                break;
                            case '06':
                                $districtName = 'Balikpapan Kota';
                                break;
                        }
                        break;
                    case '72':
                        $cityName = 'Kota Samarinda';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Palaran';
                                break;
                            case '02':
                                $districtName = 'Samarinda Seberang';
                                break;
                            case '03':
                                $districtName = 'Samarinda Ulu';
                                break;
                            case '04':
                                $districtName = 'Samarinda Ilir';
                                break;
                            case '05':
                                $districtName = 'Samarinda Utara';
                                break;
                            case '06':
                                $districtName = 'Sungai Kunjang';
                                break;
                            case '07':
                                $districtName = 'Sambutan';
                                break;
                            case '08':
                                $districtName = 'Sungai Pinang';
                                break;
                            case '09':
                                $districtName = 'Samarinda Kota';
                                break;
                            case '10':
                                $districtName = 'Loa Janan Ilir';
                                break;
                        }
                        break;
                    case '73':
                        $cityName = 'Kota Tarakan';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Tarakan Barat';
                                break;
                            case '02':
                                $districtName = 'Tarakan Tengah';
                                break;
                            case '03':
                                $districtName = 'Tarakan Timur';
                                break;
                            case '04':
                                $districtName = 'Tarakan Utara';
                                break;
                        }
                        break;
                    case '74':
                        $cityName = 'Kota Bontang';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Bontang Utara';
                                break;
                            case '02':
                                $districtName = 'Bontang Selatan';
                                break;
                            case '03':
                                $districtName = 'Bontang Barat';
                                break;
                        }
                        break;
                }
        }

        return [
            'province_name' => $provinceName,
            'city_name'     => $cityName,
            'district_name' => $districtName
        ];
    }
}
