<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;


class CutiController extends Controller
{

    public function index(){
        $cuti=DB::table('table_cuti')
        ->join('table_karyawan', 'table_cuti.id_user', '=', 'table_karyawan.id_user')
        ->select('table_karyawan.nama', 'table_karyawan.jabatan','table_cuti.id', 'table_cuti.awal_cuti', 'table_cuti.akhir_cuti', 'table_cuti.keterangan'
        , 'table_cuti.status_1', 'table_cuti.status_2')
        ->get();
        return view('Superadmin.cuti.index', compact('cuti'));
    }

     public function create()
     {
        $nama = DB::table('table_karyawan')
        ->select('table_karyawan.id_user', 'table_karyawan.nama')
        ->get();

          $cuti = Cuti::all();
          return view('Superadmin.cuti.create', compact('cuti', 'nama'));
     }

     public function store(Request $request)
     {
          $this->validate($request, [
               'awal_cuti' => 'required',
               'akhir_cuti'  => 'required',
               'keterangan'  => 'required',
               ]);
               $cuti = new Cuti;
               $cuti->id_user = $request->id_user;
               $cuti->awal_cuti = $request->awal_cuti;
               $cuti->akhir_cuti = $request->akhir_cuti;
               $cuti->keterangan = $request->keterangan;
               $cuti->save();
               return redirect('/superadmin/cuti')->with('msg','Data Berhasil di Simpan');
     }
     public function edit($id)
    {
     $cuti = Cuti::where('id',$id)->first();
     return view('Superadmin.cuti.edit',compact('cuti'));
    }

    public function update(Request $request,$id)
    {
          $cuti = Cuti::where('id',$id)->first();
          $cuti->awal_cuti = $request->awal_cuti;
          $cuti->akhir_cuti = $request->akhir_cuti;
          $cuti->keterangan = $request->keterangan;
          $cuti->status_2 = $request->status_2;
          $cuti->save();
          return redirect('/superadmin/cuti')->with('msg','Data Berhasil di Simpan');
    }
 
    public function destroy($id)
     {
          $cuti = Cuti::find($id);
          $cuti->delete();
          return redirect('/superadmin/cuti')->with('msg','Data Berhasil di Hapus');
     }
 }
