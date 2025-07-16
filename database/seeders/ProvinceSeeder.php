<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['province' => 'Aceh'],
            ['province' => 'Bali'],
            ['province' => 'Banten'],
            ['province' => 'Bengkulu'],
            ['province' => 'Central Java'],
            ['province' => 'Central Kalimantan'],
            ['province' => 'Central Sulawesi'],
            ['province' => 'East Java'],
            ['province' => 'East Kalimantan'],
            ['province' => 'East Nusa Tenggara'],
            ['province' => 'Gorontalo'],
            ['province' => 'Jakarta'],
            ['province' => 'Jambi'],
            ['province' => 'Lampung'],
            ['province' => 'Maluku'],
            ['province' => 'North Kalimantan'],
            ['province' => 'North Maluku'],
            ['province' => 'North Sulawesi'],
            ['province' => 'North Sumatra'],
            ['province' => 'Papua'],
            ['province' => 'Riau'],
            ['province' => 'Riau Islands'],
            ['province' => 'Southeast Sulawesi'],
            ['province' => 'South Kalimantan'],
            ['province' => 'South Sulawesi'],
            ['province' => 'South Sumatra'],
            ['province' => 'West Java'],
            ['province' => 'West Kalimantan'],
            ['province' => 'West Nusa Tenggara'],
            ['province' => 'West Papua'],
            ['province' => 'West Sulawesi'],
            ['province' => 'West Sumatra'],
            ['province' => 'Yogyakarta'],
        ];

        $citiesByProvince = [
            'Jakarta' => [
                ['name' => 'Central Jakarta', 'type' => 'City', 'postal_code' => '10110'],
                ['name' => 'West Jakarta', 'type' => 'City', 'postal_code' => '11220'],
                ['name' => 'South Jakarta', 'type' => 'City', 'postal_code' => '12230'],
            ],
            'Bali' => [
                ['name' => 'Denpasar', 'type' => 'City', 'postal_code' => '80227'],
                ['name' => 'Singaraja', 'type' => 'City', 'postal_code' => '81116'],
            ],
            'Central Java' => [
                ['name' => 'Semarang', 'type' => 'City', 'postal_code' => '50135'],
                ['name' => 'Surakarta', 'type' => 'City', 'postal_code' => '57111'],
            ],
        ];

        foreach ($provinces as $province) {
            $provinceResult = Province::create(['name' => $province['province']]);

            $provinceName = $province['province'];
            $cities = $citiesByProvince[$provinceName] ?? [];
            foreach ($cities as $city) {
                City::create([
                    'province_id' => $provinceResult['id'],
                    'name' => $city['name'],
                    'type' => $city['type'],
                    'postal_code' => $city['postal_code'],
                ]);
            }
        }
    }
}
