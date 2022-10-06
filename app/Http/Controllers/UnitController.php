<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $title = "Buku Sejarah";
        $misc = ["Perang Diponegoro", "Proklamasi", "Agresi Militer"];
        return view('biodata', ['title' => $title, 'list' => $misc]);
    }
}
