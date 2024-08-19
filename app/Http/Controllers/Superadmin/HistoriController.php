<?php
namespace App\Http\Controllers\Superadmin;
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
        ->where('status_2', '=', 'disetujui')
        ->join('table_karyawan', 'table_cuti.id_user', '=', 'table_karyawan.id_user')
        ->select('table_cuti.id', 'table_karyawan.nama', 'table_karyawan.jabatan','table_cuti.id', 'table_cuti.awal_cuti', 'table_cuti.akhir_cuti', 'table_cuti.keterangan', 'table_cuti.status_2')
        ->get();
        return view('Superadmin.histori.index', compact('cuti'));
    }
    public function destroy($id)
     {
          $cuti = Cuti::find($id);
          $cuti->delete();
          return redirect('/superadmin/history')->with('msg','Data Berhasil di Hapus');
     }
}