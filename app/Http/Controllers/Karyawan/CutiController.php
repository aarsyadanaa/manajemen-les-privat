<?php
namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;


class CutiController extends Controller
{

    public function index(){
        $id=Auth()->id();
        $cuti=DB::table('table_cuti')
        ->where('id_user', '=', $id )
        ->select('table_cuti.id', 'table_cuti.awal_cuti', 'table_cuti.akhir_cuti', 'table_cuti.keterangan'
        , 'table_cuti.status_1', 'table_cuti.status_2')
        ->get();
        return view('Karyawan.cuti.index', compact('cuti'));
    }

     public function create()
     {
          $cuti = Cuti::all();
          return view('Karyawan.cuti.create', compact('cuti'));
     }

     public function store(Request $request)
     {
          $this->validate($request, [
               'awal_cuti' => 'required',
               'akhir_cuti'  => 'required',
               'keterangan'  => 'required',
               ]);
               $user=Auth()->id();
               $cuti = new Cuti;
               $cuti->id_user = $user;
               $cuti->awal_cuti = $request->awal_cuti;
               $cuti->akhir_cuti = $request->akhir_cuti;
               $cuti->keterangan = $request->keterangan;
               $cuti->save();
               return redirect('/karyawan/cuti')->with('msg','Data Berhasil di Simpan');
     }
     public function edit($id)
    {
     $cuti = Cuti::where('id',$id)->first();
     return view('Karyawan.cuti.edit',compact('cuti'));
    }

    public function update(Request $request,$id)
    {
          $cuti = Cuti::where('id',$id)->first();
          $cuti->awal_cuti = $request->awal_cuti;
          $cuti->akhir_cuti = $request->akhir_cuti;
          $cuti->keterangan = $request->keterangan;
          $cuti->save();
          return redirect('/karyawan/cuti')->with('msg','Data Berhasil di Simpan');
    }
 
    public function destroy($id)
     {
          $cuti = CUti::find($id);
          $cuti->delete();
          return redirect('/karyawan/cuti')->with('msg','Data Berhasil di Hapus');
     }
 }
