<?php
namespace App\Http\Controllers\Pic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;
use App\Models\Pic;

class PengajuanController extends Controller
{

    public function index(){
        $id=Auth()->id();
        $data=Pic::where('id_pic', $id)->select('id_pic', 'id_kar1', 'id_kar2', 'id_kar3', 'id_kar4', 'id_kar5')->first();
        $cuti1=DB::table('table_cuti')->whereIn('id_user',[$data->id_kar1, $data->id_kar2,$data->id_kar3,
         $data->id_kar4, $data->id_kar5 ] )->select('id', 'id_user','awal_cuti', 'akhir_cuti', 'keterangan', 
         'status_1')->get();
         $data1=$cuti1;
         $dataa=array();
         foreach($data1 as $data1){
            $dataa[]= $data1->id_user;
         }
        $nama=DB::table('table_karyawan')->whereIn('id_user', $dataa)->select('nama')->get();
        return view('Pic.pengajuan.index', compact('cuti1', 'nama'));
    }

     public function edit($id)
    {
        $nhama=Cuti::where('id', $id)->value('id_user');
        $name=Karyawan::where('id_user', $nhama)->value('nama');
     $cuti = Cuti::where('id',$id)->first();
     return view('Pic.pengajuan.edit',compact('cuti', 'name'));
    }

    public function update(Request $request,$id)
    {
          $cuti = Cuti::where('id',$id)->first();
          $cuti->awal_cuti = $request->awal_cuti;
          $cuti->akhir_cuti = $request->akhir_cuti;
          $cuti->keterangan = $request->keterangan;
          $cuti->status_1 = $request->status_1;
          $cuti->save();
          return redirect('/pic/pengajuan')->with('msg','Data Berhasil di Simpan');
    }
 
    public function destroy($id)
     {
          $cuti = Cuti::find($id);
          $cuti->delete();
          return redirect('/pic/pengajuan')->with('msg','Data Berhasil di Hapus');
     }
 }
