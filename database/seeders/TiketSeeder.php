<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tiket;
use Faker\Factory as Faker;


class TiketSeeder extends Seeder
{
    public function run(): void
    {

        tiket::truncate();

        $faker = Faker::create('id_ID');

        foreach (range(1, 25) as $index) {
            tiket::create([
                'nama_pembeli' => $faker->name,
                'kategori_tiket' => $faker->randomElement(['PAYUN - PRESALE 1', 'PAYUN - EARLY BIRD', 'PENGKER - PRESALE 1']),
                'jumlah' => $faker->numberBetween(1, 3),
               'tanggal' => $faker->dateTimeBetween('2024-01-01', '2024-08-03'),
            ]);
    }
}
}
