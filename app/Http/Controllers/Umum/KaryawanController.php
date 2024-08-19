<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index() {
        return view('Karyawan.dashboard.index');
    }
}