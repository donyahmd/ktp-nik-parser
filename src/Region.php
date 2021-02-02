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
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Mentarang';
                                break;
                            case '02':
                                $districtName = 'Malinau Kota';
                                break;
                            case '03':
                                $districtName = 'Pujungan';
                                break;
                            case '04':
                                $districtName = 'Kayan Hilir';
                                break;
                            case '05':
                                $districtName = 'Kayan Hulu';
                                break;
                            case '06':
                                $districtName = 'Malinau Selatan';
                                break;
                            case '07':
                                $districtName = 'Malinau Utara';
                                break;
                            case '08':
                                $districtName = 'Malinau Barat';
                                break;
                            case '09':
                                $districtName = 'Sungai Boh';
                                break;
                            case '10':
                                $districtName = 'Kayan Selatan';
                                break;
                            case '11':
                                $districtName = 'Bahau Hulu';
                                break;
                            case '12':
                                $districtName = 'Mentarang Hulu';
                                break;
                            case '13':
                                $districtName = 'Malinau Selatan Hilir';
                                break;
                            case '14':
                                $districtName = 'Malinau Selatan Hulu';
                                break;
                            case '15':
                                $districtName = 'Sungai Tubu';
                                break;
                        }
                        break;
                    case '07':
                        $cityName = 'Kabupaten Kutai Barat';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Long Apari';
                                break;
                            case '02':
                                $districtName = 'Long Pahangai';
                                break;
                            case '03':
                                $districtName = 'Long Bagun';
                                break;
                            case '04':
                                $districtName = 'Long Hubung';
                                break;
                            case '05':
                                $districtName = 'Long Iram';
                                break;
                            case '06':
                                $districtName = 'Melak';
                                break;
                            case '07':
                                $districtName = 'Barong Tongkok';
                                break;
                            case '08':
                                $districtName = 'Damai';
                                break;
                            case '09':
                                $districtName = 'Muara Lawa';
                                break;
                            case '10':
                                $districtName = 'Muara Pahu';
                                break;
                            case '11':
                                $districtName = 'Jempang';
                                break;
                            case '12':
                                $districtName = 'Bongan';
                                break;
                            case '13':
                                $districtName = 'Penyinggahan';
                                break;
                            case '14':
                                $districtName = 'Bentian Besar';
                                break;
                            case '15':
                                $districtName = 'Linggang Bigung';
                                break;
                            case '16':
                                $districtName = 'Nyuatan';
                                break;
                            case '17':
                                $districtName = 'Siluq Ngurai';
                                break;
                            case '18':
                                $districtName = 'Mook Manaar Bulatn';
                                break;
                            case '19':
                                $districtName = 'Tering';
                                break;
                            case '20':
                                $districtName = 'Sekolaq Darat';
                                break;
                            case '21':
                                $districtName = 'Laham';
                                break;
                        }
                        break;
                    case '08':
                        $cityName = 'Kabupaten Kutai Timur';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Muara Ancalong';
                                break;
                            case '02':
                                $districtName = 'Muara Wahau';
                                break;
                            case '03':
                                $districtName = 'Muara Bengkal';
                                break;
                            case '04':
                                $districtName = 'Sangatta Utara';
                                break;
                            case '05':
                                $districtName = 'Sangkulirang';
                                break;
                            case '06':
                                $districtName = 'Busang';
                                break;
                            case '07':
                                $districtName = 'Telen';
                                break;
                            case '08':
                                $districtName = 'Kombeng';
                                break;
                            case '09':
                                $districtName = 'Bengalon';
                                break;
                            case '10':
                                $districtName = 'Kaliorang';
                                break;
                            case '11':
                                $districtName = 'Sandaran';
                                break;
                            case '12':
                                $districtName = 'Sangatta Selatan';
                                break;
                            case '13':
                                $districtName = 'Teluk Pandan';
                                break;
                            case '14':
                                $districtName = 'Rantau Pulung';
                                break;
                            case '15':
                                $districtName = 'Kaubun';
                                break;
                            case '16':
                                $districtName = 'Karangan';
                                break;
                            case '17':
                                $districtName = 'Batu Ampar';
                                break;
                            case '18':
                                $districtName = 'Long Mesangat';
                                break;
                        }
                        break;
                    case '09':
                        $cityName = 'Kabupaten Penajam Paser Utara';
                        switch ($districtCode) {
                            case '01':
                                $districtName = 'Penajam';
                                break;
                            case '02':
                                $districtName = 'Waru';
                                break;
                            case '03':
                                $districtName = 'Babulu';
                                break;
                            case '04':
                                $districtName = 'Sepaku';
                                break;
                        }
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
