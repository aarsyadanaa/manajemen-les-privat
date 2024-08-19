<?php
namespace App\Http\Controllers\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\User;


class KaryawanController extends Controller
{

    public function index(){
        return view('Karyawan.dashboard.index');
    }

    public function profil(){

          $id=Auth()->id();    
          $user=Karyawan::where('id_user', $id)->first();
          $email=User::where('id', $id)->pluck('email');
          if($user != null){ 
          $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', $id)
          ->select('table_karyawan.id_user','table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Karyawan.profil.index', compact('profil', 'user', 'email'));
          }
          else{
               $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', null)
          ->select('table_karyawan.id_user', 'table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Karyawan.profil.index', compact('profil', 'user'));
          }
    }

     public function create()
     {
          $create = Karyawan::all();
          return view('Karyawan.profil.create', compact('create'));
     }

     public function store(Request $request)
     {
          $this->validate($request, [
               'nama' => 'required',
               'alamat'  => 'required',
               'jabatan'  => 'required',
               'no_telp'  => 'required',
               ]);
               $create = new Karyawan;
               $user = auth()->id();
               $create->id_user = $user;
               $create->nama = $request->nama;
               $create->alamat = $request->alamat;
               $create->jabatan = $request->jabatan;
               $create->no_telp = $request->no_telp;
               $create->save();
               return redirect('/karyawan/profil')->with('msg','Data Berhasil di Simpan');
     }
     public function edit($id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          return view('Karyawan.profil.update',compact('karyawan'));
     }

     public function update(Request $request,$id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          $karyawan->nama = $request->nama;
          $karyawan->alamat = $request->alamat;
          $karyawan->jabatan = $request->jabatan;
          $karyawan->no_telp = $request->no_telp;
          $karyawan->save();
          return redirect('/karyawan/profil')->with('msg','Data Berhasil di Simpan');
     }

public function destroy($id)
     {
          $client = Client::find($id);
          $client->delete();
          return redirect('client.profil.profil')->with('msg','Data Berhasil di Hapus');
     }
 }
