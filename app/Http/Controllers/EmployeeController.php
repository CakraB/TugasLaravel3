<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee()
    {
        $Employee = DB::table('employees')->get();
        return response()->json([
            'data' => $Employee
        ]);
    }
}
