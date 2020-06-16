<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('events')->insert([
            'nama_event' => 'BNCC Company Visit',
            'lokasi_event' => 'Jakarta Selatan'
        ]);
        
        DB::table('events')->insert([
            'nama_event' => 'BNCC MeetUp',
            'lokasi_event' => 'Jakarta Selatan'
        ]);

        DB::table('events')->insert([
            'nama_event' => 'BNCC Hackathon',
            'lokasi_event' => 'Jakarta Pusat'
        ]);
        $this->call([
            CompanySeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
