<?php

namespace App\Http\Controllers\Umum;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->role_id === 1) {
            return redirect('/superadmin');
        } 
        if (auth()->user()->role_id === 2) {
            return redirect('/pic');
        } 
        else {
            return redirect('/karyawan');
        }
    }
}