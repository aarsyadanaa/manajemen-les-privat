<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;

class PicController extends Controller
{
    public function index() {
        return view('Pic.dashboard.index');
    }
}