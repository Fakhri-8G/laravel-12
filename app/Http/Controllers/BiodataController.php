<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;

class BiodataController extends Controller
{
    public function tampilkan()
    {
        $biodata = Biodata::all();
        return view('halaman_biodata', compact('biodata'));
    }
}
