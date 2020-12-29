<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reseps')->insert([
            'name' => "Ikan Asam Manis",
            'description' => "Lauk",
            'jenis' => "Seafood",
            'gambar' => "storage/uploads/iBDHkIdvPgRiBUSpXedvmG57J5MSAtTzCLg0xOVF.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reseps')->insert([
            'name' => "Tahu Tek Telur",
            'description' => "Enak",
            'jenis' => "Tradisional",
            'gambar' => "storage/uploads/riCieAJzkfvezAg91TrRTnT9qTlMJ9Bzrmrvez2B.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reseps')->insert([
            'name' => "Ayam Goreng Mentega",
            'description' => "Enak",
            'jenis' => "Lauk",
            'gambar' => "storage/uploads/UWgA9tK5xxtwGKoy2ihCrrqZkE0fSKKU0Bfm46UP.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
