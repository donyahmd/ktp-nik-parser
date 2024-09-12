<?php

namespace Donyahmd\KtpNikParser;

trait Region
{
    private function readCsv($filename)
    {
        // Adjust the path to go up one level and access the data folder
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $filename;
        $rows = [];

        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ';')) !== false) { // Use ';' as delimiter
                $rows[] = $data;
            }
            fclose($handle);
        } else {
            throw new \Exception("File not found: $filePath");
        }

        return $rows;
    }

    private function loadProvinces()
    {
        $provinces = [];
        $rows = $this->readCsv('provinces.csv');
        foreach ($rows as $row) {
            $provinces[$row[0]] = $row[1]; // [province_code => province_name]
        }
        return $provinces;
    }

    private function loadRegencies()
    {
        $regencies = [];
        $rows = $this->readCsv('regencies.csv');
        foreach ($rows as $row) {
            $regencies[$row[0]] = [ // regency_code
                'province_code' => $row[1], // province_code
                'regency_name' => $row[2]   // regency_name
            ];
        }
        return $regencies;
    }

    private function loadDistricts()
    {
        $districts = [];
        $rows = $this->readCsv('districts.csv');
        foreach ($rows as $row) {
            $districts[$row[0]] = [ // district_code
                'regency_code' => $row[1],  // regency_code
                'district_name' => $row[2]  // district_name
            ];
        }
        return $districts;
    }

    private function getRegionName($provinceCode, $regencyCode, $districtCode)
    {
        $provinces = $this->loadProvinces();
        $regencies = $this->loadRegencies();
        $districts = $this->loadDistricts();

        $provinceName = $provinces[$provinceCode] ?? null;

        $regencyName = null;
        if (isset($regencies[$regencyCode]) && $regencies[$regencyCode]['province_code'] == $provinceCode) {
            $regencyName = $regencies[$regencyCode]['regency_name'];
        }

        $districtName = null;
        if (isset($districts[$districtCode]) && $districts[$districtCode]['regency_code'] == $regencyCode) {
            $districtName = $districts[$districtCode]['district_name'];
        }

        return [
            'province_name' => $provinceName,
            'regency_name'  => $regencyName,
            'district_name' => $districtName
        ];
    }
}
