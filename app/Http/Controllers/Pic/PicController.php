<?php
namespace App\Http\Controllers\Pic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Pic;
use App\Models\User;


class PicController extends Controller
{
    public function index(){
        return view('Pic.dashboard.index');
    }

    public function profil()
    {
        $id=Auth()->id();    
          $user=Karyawan::where('id_user', $id)->first();
          $email=User::where('id', $id)->pluck('email');
          if($user != null){ 
          $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', $id)
          ->select('table_karyawan.id_user','table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Pic.profil.index', compact('profil', 'user', 'email'));
          }
          else{
               $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', null)
          ->select('table_karyawan.id_user', 'table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Pic.profil.index', compact('profil', 'user'));
          }
    }
    public function edit($id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          return view('Pic.profil.update',compact('karyawan'));
     }

     public function update(Request $request,$id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          $karyawan->nama = $request->nama;
          $karyawan->alamat = $request->alamat;
          $karyawan->jabatan = $request->jabatan;
          $karyawan->no_telp = $request->no_telp;
          $karyawan->save();
          return redirect('/pic/profil')->with('msg','Data Berhasil di Simpan');
     }
}