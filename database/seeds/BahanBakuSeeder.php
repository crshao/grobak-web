<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BahanBakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahanbakus')->insert([
            'name' => "Bawang Putih",
            'description' => "Bawang putih digunakan sebagai bumbu yang digunakan hampir di setiap makanan dan masakan Indonesia. Sebelum dipakai sebagai bumbu, bawang putih dihancurkan dengan ditekan dengan sisi pisau (dikeprek) sebelum dirajang halus dan ditumis di penggorengan dengan sedikit minyak goreng. Bawang putih bisa juga dihaluskan dengan berbagai jenis bahan bumbu yang lain. Bawang putih mempunyai khasiat sebagai antibiotik alami di dalam tubuh manusia",
            'pricetag' => "Rp. 3.200 / Ons",
            'price' => 3200,
            'jenis' => "Rempah",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Bawang Merah",
            'description' => "Bawang goreng adalah bawang merah yang diiris tipis dan digoreng dengan minyak goreng yang banyak. Pada umumnya, masakan Indonesia berupa soto, sup juga bubur ayam menggunakan bawang goreng sebagai penyedap sewaktu dihidangkan. Selain diolah menjadi bawang goreng, bawang merah dapat juga dapat bermanfaat sebagai obat yaitu untuk mengobati maag, masuk angin, menurunkan kadar gula dalam darah, menurunkan kolesterol, sebagai obat kencing manis (diabetes melitus), memperlancar pernafasan dan memperlancar aliran darah karena bawang merah dapat menghambat penimbunan trombosit dan meningkatkan aktivitas fibrinotik.",
            'pricetag' => "Rp. 2.500 / Ons",
            'price' => 2500,
            'jenis' => "Rempah",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Ikan Gurami",
            'description' => "Ikan gurami terutama digemari sebagai ikan konsumsi. Dagingnya padat, durinya besar-besar, rasanya enak dan gurih. Gurami hampir selalu tersedia di restoran, untuk dijadikan pelbagai macam masakan terutama gurami bakar dan gurami asam-manis. Ikan ini berharga cukup mahal. Gurami juga disukai sebagai ikan hias akuarium.",
            'pricetag' => "Rp. 55.000 / Kg",
            'price' => 55000,
            'jenis' => "Seafood",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}