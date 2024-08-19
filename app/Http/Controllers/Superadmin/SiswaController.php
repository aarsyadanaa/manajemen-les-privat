<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Siswa;


class SiswaController extends Controller
{

    public function index(){
        $siswa=Siswa::all();
        return view('Superadmin.siswa.index', compact('siswa'));
    }
    public function create()
     {
          $siswa = Siswa::all();
          return view('Superadmin.siswa.create', compact('siswa'));
     }
    
     public function store(Request $request)
     {
          $this->validate($request, [
               'nama_siswa' => 'required',
               ]);
               $siswa = new Siswa;
               $siswa->nama_siswa = $request->nama_siswa;
               $siswa->ttl_siswa = $request->ttl_siswa;
               $siswa->nama_ortu = $request->nama_ortu;
               $siswa->nama_sekolah = $request->nama_sekolah;
               $siswa->kelas = $request->kelas;
               $siswa->alamat = $request->alamat;
               $siswa->no_telp = $request->no_telp;
               $siswa->save();
               return redirect('/superadmin/siswa')->with('msg','Data Berhasil di Simpan');
     }
    public function edit($id)
    {
     $siswa = Siswa::where('id',$id)->first();
     return view('Superadmin.siswa.edit',compact('siswa'));
    }

    public function update(Request $request,$id)
    {
          $siswa = Siswa::where('id',$id)->first();
          $siswa->nama_siswa = $request->nama_siswa;
               $siswa->ttl_siswa = $request->ttl_siswa;
               $siswa->nama_ortu = $request->nama_ortu;
               $siswa->nama_sekolah = $request->nama_sekolah;
               $siswa->kelas = $request->kelas;
               $siswa->alamat = $request->alamat;
               $siswa->no_telp = $request->no_telp;
               $siswa->save();
          return redirect('/superadmin/siswa')->with('msg','Data Berhasil di Simpan');
    }
    public function destroy($id)
     {
          $siswa = Siswa::find($id);
          $siswa->delete();
          return redirect('/superadmin/siswa')->with('msg','Data Berhasil di Hapus');
     }
}