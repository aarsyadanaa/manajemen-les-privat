<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index() {
        return view('Superadmin.dashboard.index');
    }
}