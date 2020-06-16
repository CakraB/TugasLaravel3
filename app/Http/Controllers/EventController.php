<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{ 

    public function __construct() 
    {
        $this->middleware('auth:api');
    }

    public function store(Request $request)
    {
        Event::create([
            'nama_event' => $request->nama_event,
            'lokasi_event' => $request->lokasi_event
        ]);
        return response()->json([
            'message' => 'Success Input Event'
        ]);
    }
    public function getEvent() 
    {
        $Event = DB::table('events')->get();
        return response()->json([
            'data' => $Event
        ]);
    }
    public function getEventCompanyEmployee()
    {
        $EventCompanyEmployee = DB::table('events')
                            ->join('companies', 'events.id','=','companies.event_id')
                            ->join('employees', 'companies.id', '=', 'employees.company_id')
                            ->select('nama_event','lokasi_event','nama_perusahaan','alamat_perusahaan','nama_karyawan','posisi_karyawan')
                            ->get();
                            //join semua table trus get semua data
        return response()->json([
            'data' => $EventCompanyEmployee
        ]);
    }

}
