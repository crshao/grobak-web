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
            'gambar' => "storage/uploads/GdT4mOMCCzdmKbjSxYMbz1MAXdHoEFeEBXZuyQpA.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Bawang Merah",
            'description' => "Bawang goreng adalah bawang merah yang diiris tipis dan digoreng dengan minyak goreng yang banyak. Pada umumnya, masakan Indonesia berupa soto, sup juga bubur ayam menggunakan bawang goreng sebagai penyedap sewaktu dihidangkan. Selain diolah menjadi bawang goreng, bawang merah dapat juga dapat bermanfaat sebagai obat yaitu untuk mengobati maag, masuk angin, menurunkan kadar gula dalam darah, menurunkan kolesterol, sebagai obat kencing manis (diabetes melitus), memperlancar pernafasan dan memperlancar aliran darah karena bawang merah dapat menghambat penimbunan trombosit dan meningkatkan aktivitas fibrinotik.",
            'pricetag' => "Rp. 2.500 / Ons",
            'price' => 2500,
            'jenis' => "Rempah",
            'gambar' => "storage/uploads/LoEBPyaV6qeDjJJzr13Cnb6S3A8FidsLm9bGtwAw.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Ikan Gurami",
            'description' => "Ikan gurami terutama digemari sebagai ikan konsumsi. Dagingnya padat, durinya besar-besar, rasanya enak dan gurih. Gurami hampir selalu tersedia di restoran, untuk dijadikan pelbagai macam masakan terutama gurami bakar dan gurami asam-manis. Ikan ini berharga cukup mahal. Gurami juga disukai sebagai ikan hias akuarium.",
            'pricetag' => "Rp. 55.000 / Kg",
            'price' => 55000,
            'jenis' => "Seafood",
            'gambar' => "storage/uploads/XFevPXbugsFB52qIAyPpzU6hmoViKSPh2SYD5NhM.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Jeruk Nipis",
            'description' => "Untuk kesehatan dan kecantikan.",
            'pricetag' => "Rp. 5.000 / Ons",
            'price' => 5000,
            'jenis' => "Rempah",
            'gambar' => "storage/uploads/bRgnJAOD6SA8YZaaOkuTdnkm0huXq8X0wuvMJ6e0.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Bawang Bombai",
            'description' => "Khasiat bawang bombai sangat banyak, yaitu antioksidan alami, mampu menekan efek sinogenik dari senyawa radikal bebas",
            'pricetag' => "Rp. 20.000 / Ons",
            'price' => 20000,
            'jenis' => "Rempah",
            'gambar' => "storage/uploads/WK1s1bETGR5xGnUaW3r7UKPj3Hyi6FVmPVp067Lo.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Nanas",
            'description' => "Nanas yang dibudidayakan orang sudah kehilangan kemampuan memperbanyak secara seksual, tetapi ia mengembangkan tanaman muda (bagian 'mahkota' buah) yang merupakan sarana perbanyakan secara vegetatif. nanas meningkatkan pencernaan dan mengurangi jerawat.",
            'pricetag' => "Rp. 10.000 / Buah",
            'price' => 10000,
            'jenis' => "Buah",
            'gambar' => "storage/uploads/4Nf9m4XvZNCp7tDpo6ixPt8eS6IzWFUSezEpi9lj.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('bahanbakus')->insert([
            'name' => "Paprika",
            'description' => "Nanas yang dibudidayakan orang sudah kehilangan kemampuan memperbanyak secara seksual, tetapi ia mengembangkan tanaman muda (bagian 'mahkota' buah) yang merupakan sarana perbanyakan secara vegetatif. nanas meningkatkan pencernaan dan mengurangi jerawat.",
            'pricetag' => "Rp. 50.000 / Kg",
            'price' => 50000,
            'jenis' => "Sayuran",
            'gambar' => "storage/uploads/lDznCwCi569FqJPW2JfRGf4vwTEkO7xTscWvM3iD.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}