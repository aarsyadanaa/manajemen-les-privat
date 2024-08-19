<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Siswa;
use App\Models\User;


class SuperadminController extends Controller
{

    public function index(){
          $siswa=DB::table('table_siswa')->count();
        return view('Superadmin.dashboard.index', compact('siswa'));
    }

 }
