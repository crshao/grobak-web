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
            'description' => "Enak",
            'jenis' => "Seafood",
            'gambar' => "storage/uploads/iBDHkIdvPgRiBUSpXedvmG57J5MSAtTzCLg0xOVF.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
