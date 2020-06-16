<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'event_id' => 1,
            'nama_perusahaan' => 'Tokopedia',
            'alamat_perusahaan' => 'Jakarta Selatan'
        ]);

        DB::table('companies')->insert([
            'event_id' => 2,
            'nama_perusahaan' => 'Go-Jek',
            'alamat_perusahaan' => 'Jakarta Selatan'
        ]);

        DB::table('companies')->insert([
            'event_id' => 3,
            'nama_perusahaan' => 'Tiket.com',
            'alamat_perusahaan' => 'Jakarta Pusat'
        ]);
    }
}
