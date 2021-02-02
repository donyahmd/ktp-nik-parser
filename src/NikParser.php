<?php

namespace Donyahmd\KtpNikParser;

class NikParser
{
    use Region;

    const MALE = 'Male';
    const FEMALE = 'Female';

    /**
     * Format NIK KTP Untuk mengetahui format yang ada pada nik sesuai atau tidak.
     * Jika sesuai nanti hasilnya akan menampilkan data wilayah, tanggal lahir, dan
     * gender dari yang punya KTP.
     *
     * @param integer $nik
     * @return array
     */
    public function parse(string $nik)
    {
        try {
            return $this->explodeNik($nik);
        } catch (\Throwable $th) {
            return 'Error! Check Format of NIK Number!';
        }
    }

    private function explodeNik(string $nik)
    {
        $provinceCode = $this->getProvinceCode($nik);
        $cityCode = $this->getCityCode($nik);
        $districtCode = $this->getDistrictCode($nik);

        $regionName = $this->getRegionName($provinceCode, $cityCode, $districtCode);

        $dateOfBirth = $this->getDateOfBirth($nik);
        $gender = $this->getGender($nik);

        $result = [
            'nik' => $nik,
            'province' => [
                'code' => $provinceCode,
                'name' => $regionName['province_name']
            ],
            'city' => [
                'code' => $cityCode,
                'name' => $regionName['city_name']
            ],
            'district' => [
                'code' => $districtCode,
                'name' => $regionName['district_name']
            ],
            'date_of_birth' => $dateOfBirth,
            'gender' => $gender,
        ];

        return (array) $result;
    }

    private function getProvinceCode(string $nik)
    {
        return substr($nik, 0, 2);
    }

    private function getCityCode(string $nik)
    {
        return substr($nik, 2, 2);
    }

    private function getDistrictCode(string $nik)
    {
        return substr($nik, 4, 2);
    }

    private function isFemale($date)
    {
        if ($date >= 40)
            return true;
        else
            return false;
    }

    private function getDateOfBirth(string $nik)
    {
        $date = substr($nik, 6, 2);

        $this->isFemale($date) ? $date = $date - 40 : $date;

        $month = substr($nik, 8, 2);
        $year = substr($nik, 10, 2);

        $date_parse = date_create($year . '-' . $month . '-' . $date);

        return date_format($date_parse, 'd-m-Y');
    }

    private function getGender(string $nik)
    {
        $date = (int) substr($nik, 6, 2);

        return $this->isFemale($date) ? self::FEMALE : self::MALE;
    }
}
