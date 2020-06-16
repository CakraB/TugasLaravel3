<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getCompany()
    {
        $Company = DB::table('companies')->get();
        return response()->json([
            'data' => $Company
        ]);
    }
    public function getCompanyEmployee()
    {
        $CompanyEmployee = DB::table('companies')
                        ->join('employees', 'companies.id', '=', 'employees.company_id')
                        ->select('nama_perusahaan','alamat_perusahaan','nama_karyawan','posisi_karyawan')
                        ->get();
                        //join table comapny dan employee trus get semua data
        return response()->json([
            'data' => $CompanyEmployee
        ]);
    }
}
