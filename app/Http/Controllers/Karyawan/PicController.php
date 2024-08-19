<?php
namespace App\Http\Controllers\Karyawan;
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
        $id=Auth()->id();
        $pic=Pic::where('id_kar1', '=', $id )->orwhere('id_kar2', '=', $id )->orwhere('id_kar3', '=', $id )
        ->orwhere('id_kar4', '=', $id )->orwhere('id_kar5', '=', $id )->value('id_pic');
        if($pic != null){
        $email=User::where('id', $pic)->pluck('email');
        $data=DB::table('table_karyawan')
        ->where('id_user', $pic)
        ->select('table_karyawan.nama', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
        ->get();
        return view('Karyawan.pic.index', compact('data', 'email', 'pic'));
        }
        else{
            $data=DB::table('table_karyawan')
            ->where('id_user', null)
            ->select('table_karyawan.nama', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
            ->get();
        return view('Karyawan.pic.index', compact('data', 'pic'));
        }
    }
}