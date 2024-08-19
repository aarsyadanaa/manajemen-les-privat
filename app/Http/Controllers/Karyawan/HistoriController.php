<?php
namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;


class HistoriController extends Controller
{

    public function index(){
        $id=Auth()->id();
        $cuti=DB::table('table_cuti')
        ->where('id_user', '=', $id )
        ->where('status_2', '=', 'disetujui')
        ->select('table_cuti.id', 'table_cuti.awal_cuti', 'table_cuti.akhir_cuti', 'table_cuti.keterangan', 'table_cuti.status_2')
        ->get();
        return view('Karyawan.histori.index', compact('cuti'));
    }
}