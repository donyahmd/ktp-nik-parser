<?php

namespace Donyahmd\KtpNikParser;

class NikParser
{
    use Region;

    public const MALE = 1;
    public const FEMALE = 0;

    /**
     * Format NIK KTP Untuk mengetahui format yang ada pada nik sesuai atau tidak.
     * Jika sesuai nanti hasilnya akan menampilkan data wilayah, tanggal lahir, dan
     * gender dari yang punya KTP.
     *
     * @param string $nik
     * @return array|string
     */
    public function parse(string $nik)
    {
        try {
            return $this->explodeNik($nik);
        } catch (\Throwable $th) {
            return 'Error! Check Format of NIK Number!';
        }
    }

    public function explodeNik(string $nik)
    {
        $provinceCode = $this->getProvinceCode($nik);
        $regencyCode = $this->getRegencyCode($nik);
        $districtCode = $this->getDistrictCode($nik);

        $regionName = $this->getRegionName($provinceCode, $regencyCode, $districtCode);

        $dateOfBirth = $this->getDateOfBirth($nik);
        $gender = $this->getGender($nik);

        return [
            'nik' => $nik,
            'province' => [
                'code' => $provinceCode,
                'name' => strtoupper($regionName['province_name'])
            ],
            'regency' => [
                'code' => $regencyCode,
                'name' => strtoupper($regionName['regency_name'])
            ],
            'district' => [
                'code' => $districtCode,
                'name' => strtoupper($regionName['district_name'])
            ],
            'date_of_birth' => $dateOfBirth,
            'gender' => $gender,
        ];
    }

    public function getProvinceCode(string $nik)
    {
        return substr($nik, 0, 2);
    }

    public function getRegencyCode(string $nik)
    {
        return substr($nik, 0, 4);
    }

    public function getDistrictCode(string $nik)
    {
        return substr($nik, 0, 6);
    }

    public function getDateOfBirth(string $nik)
    {
        $date = substr($nik, 6, 2);

        // Adjust the date for females
        if ($this->isFemale($date)) {
            $date = $date - 40;
        }

        $month = substr($nik, 8, 2);
        $year = substr($nik, 10, 2);

        $date_parse = date_create($year . '-' . $month . '-' . $date);

        return date_format($date_parse, 'd-m-Y');
    }

    public function isFemale($date)
    {
        return $date >= 40;
    }

    public function getGender(string $nik)
    {
        $date = (int) substr($nik, 6, 2);

        return $this->isFemale($date) ? self::FEMALE : self::MALE;
    }
}
