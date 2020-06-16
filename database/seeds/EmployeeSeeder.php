<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert ([
            'company_id' => 1,
            'nama_karyawan' => 'Andi',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 1,
            'nama_karyawan' => 'Bima',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 1,
            'nama_karyawan' => 'Adam',
            'posisi_karyawan' => 'Manager'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 2,
            'nama_karyawan' => 'Antonio',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 2,
            'nama_karyawan' => 'Erik',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 2,
            'nama_karyawan' => 'Benny',
            'posisi_karyawan' => 'Manager'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 3,
            'nama_karyawan' => 'Tito',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 3,
            'nama_karyawan' => 'Edgar',
            'posisi_karyawan' => 'Staff'
        ]);

        DB::table('employees')->insert ([
            'company_id' => 3,
            'nama_karyawan' => 'Johan',
            'posisi_karyawan' => 'Manager'
        ]);
    }
}
