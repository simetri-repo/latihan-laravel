<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        //req get
        $pegawai = DB::table('pegawai')->get();
        //response
        return view('index', ['pegawai' => $pegawai]);
    }
}
