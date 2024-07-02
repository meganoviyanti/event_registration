<?php

namespace Database\Seeders;

use App\Models\Daftar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Daftar::truncate();

        $faker = Faker::create('id_ID');

        foreach (range(1, 25) as $index) {
            Daftar::create([
                'nama' => $faker->name,
                'email' => $faker->email,
                'nomor' => $faker->phoneNumber,
            ]);
    }
}
}
