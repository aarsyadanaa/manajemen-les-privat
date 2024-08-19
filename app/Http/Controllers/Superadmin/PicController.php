<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Pic;
use App\Models\User;


class PicController extends Controller
{

    public function index()
    {
        $pic=DB::table('table_pic')
        ->join('table_karyawan', 'table_pic.id_pic', '=', 'table_karyawan.id_user')
        // ->join('table_karyawan', 'table_pic.id_kar1', '=', 'table_karyawan.id_user')
        // ->join('table_karyawan', 'table_pic.id_kar2', '=', 'table_karyawan.id_user')
        // ->join('table_karyawan', 'table_pic.id_kar3', '=', 'table_karyawan.id_user')
        // ->join('table_karyawan', 'table_pic.id_kar4', '=', 'table_karyawan.id_user')
        // ->join('table_karyawan', 'table_pic.id_kar5', '=', 'table_karyawan.id_user')
        // ->select('table_pic.id', 'table_pic.id_pic', 'table_pic.id_kar1', 
        // 'table_pic.id_kar2', 'table_pic.id_kar3','table_pic.id_kar4','table_pic.id_kar5', 'table_karyawan.nama', 'table_karyawan.jabatan')
        ->select('table_pic.id', 'table_karyawan.nama', 'table_karyawan.jabatan')
        ->get();
        return view('Superadmin.pic.index', compact('pic'));
    }
    public function rincian($id)
    {
        $pic=Pic::where('id', $id)->select('table_pic.id_kar1', 'table_pic.id_kar2', 
        'table_pic.id_kar3','table_pic.id_kar4','table_pic.id_kar5')->get();
        foreach($pic as $pic){
            $kar1=$pic->id_kar1;
            $kar2=$pic->id_kar2;
            $kar3=$pic->id_kar3;
            $kar4=$pic->id_kar4;
            $kar5=$pic->id_kar5;
        }
        $nama1=Karyawan::where('id_user', $kar1)->select('nama', 'jabatan')->first();
        $nama2=Karyawan::where('id_user', $kar2)->select('nama', 'jabatan')->first();
        $nama3=Karyawan::where('id_user', $kar3)->select('nama', 'jabatan')->first();
        $nama4=Karyawan::where('id_user', $kar4)->select('nama', 'jabatan')->first();
        $nama5=Karyawan::where('id_user', $kar5)->select('nama', 'jabatan')->first();
        return view('Superadmin.pic.rincian', compact('nama1', 'nama2', 'nama3', 'nama4', 'nama5'));

    }
    public function create()
     {
        $nama1 = DB::table('table_karyawan')
        ->select('table_karyawan.id_user', 'table_karyawan.nama')
        ->get();
        $nama2=$nama1;
        $nama3=$nama1;
        $nama4=$nama1;
        $nama5=$nama1;
        $nama6=$nama1;

          $pici = Pic::all();
          return view('Superadmin.pic.create', compact('pici', 'nama1', 'nama2', 'nama3', 'nama4', 'nama5' , 'nama6'));
     }

     public function store(Request $request)
     {
          $this->validate($request, [
               'id_pic' => 'required',
               ]);
               $pic = new Pic;
               $pic->id_pic = $request->id_pic;
               $pic->id_kar1 = $request->id_kar1;
               $pic->id_kar2 = $request->id_kar2;
               $pic->id_kar3 = $request->id_kar3;
               $pic->id_kar4 = $request->id_kar4;
               $pic->id_kar5 = $request->id_kar5;
               $pic->save();
               $pic=User::find($request->id_pic)->update(['role_id' => '2']);
               return redirect('/superadmin/pic')->with('msg','Data Berhasil di Simpan');
     }
     public function edit($id)
    {
     $pici = Pic::where('id',$id)->first();
     $namaPic=Karyawan::where('id_user', $pici->id_pic)->value('nama');
     $namaKar1=Karyawan::where('id_user', $pici->id_kar1)->value('nama');
     $namaKar2=Karyawan::where('id_user', $pici->id_kar2)->value('nama');
     $namaKar3=Karyawan::where('id_user', $pici->id_kar3)->value('nama');
     $namaKar4=Karyawan::where('id_user', $pici->id_kar4)->value('nama');
     $namaKar5=Karyawan::where('id_user', $pici->id_kar5)->value('nama');
     $nama1 = DB::table('table_karyawan')
        ->select('table_karyawan.id_user', 'table_karyawan.nama')
        ->get();
        $nama2=$nama1;
        $nama3=$nama1;
        $nama4=$nama1;
        $nama5=$nama1;
        $nama6=$nama1;
     return view('Superadmin.pic.edit',compact('pici', 'nama1', 'nama2', 'nama3', 'nama4', 'nama5' , 'nama6', 'namaPic', 'namaKar1', 'namaKar2', 'namaKar3', 'namaKar4', 'namaKar5'));
    }

    public function update(Request $request,$id)
    {
          $pici = Pic::where('id',$id)->first();
          $pici->id_pic = $request->id_pic;
               $pici->id_kar1 = $request->id_kar1;
               $pici->id_kar2 = $request->id_kar2;
               $pici->id_kar3 = $request->id_kar3;
               $pici->id_kar4 = $request->id_kar4;
               $pici->id_kar5 = $request->id_kar5;
               $pici->save();
          return redirect('/superadmin/pic')->with('msg','Data Berhasil di Simpan');
    }
 
    public function destroy($id)
     {
          $cuti = Pic::find($id);
          $cuti->delete();
          return redirect('/superadmin/pic')->with('msg','Data Berhasil di Hapus');
     }
 }

