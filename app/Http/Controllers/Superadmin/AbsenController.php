<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use Carbon;
use App\Models\Rekap;
use App\Models\Siswa;


class AbsenController extends Controller
{
     public function sort(Request $request){
          $sasi = $request->sasi;
          $sasi->save();
          return redirect('/superadmin/absen');
     }
    public function index(Request $request){
        $month = date('m');
        $sasi = $request->sasi;
        $absen=DB::table('table_absen')
        ->where('table_absen.bulan', '=', $month)
        ->join('table_siswa', 'table_absen.id_siswa', '=', 'table_siswa.id')
        ->select('table_siswa.nama_siswa','table_absen.id', 'table_absen.tanggal','table_absen.materi', 'table_absen.durasi', 'table_absen.catatan', 'table_absen.updated_at')->orderBy('table_absen.updated_at', 'desc')
        ->get();
        return view('Superadmin.absen.index', compact('absen', 'sasi'));
    }
    public function create()
     {
        $nama1 = DB::table('table_siswa')
        ->select('table_siswa.id', 'table_siswa.nama_siswa')
        ->get();
          $absen = Rekap::all();
          return view('Superadmin.absen.create', compact('absen', 'nama1'));
     }
    
     public function store(Request $request)
     {
          $this->validate($request, [
               'id_siswa' => 'required',
               ]);
               $month = date('m');
               $absen = new Rekap;
               $absen->id_siswa = $request->id_siswa;
               $absen->tanggal = $request->tanggal;
               $absen->materi = $request->materi;
               $absen->durasi = $request->durasi;
               $absen->catatan = $request->catatan;
               $absen->bulan = $month;
               $absen->save();
               return redirect('/superadmin/absen')->with('msg','Data Berhasil di Simpan');
     }
    public function edit($id)
    {
        $nama1 = DB::table('table_siswa')
        ->select('table_siswa.id', 'table_siswa.nama_siswa')
        ->get();
     $absen = Rekap::where('id',$id)->first();
     $id_sis = Rekap::where('id', $id)->value('id_siswa');
     $nama=Siswa::where('id', $id_sis)->value('nama_siswa');
     return view('Superadmin.absen.edit',compact('absen', 'nama1', 'nama'));
    }

    public function update(Request $request,$id)
    {
            $month = date('m');
                $absen = Rekap::where('id',$id)->first();
                $absen->id_siswa = $request->id_siswa;
               $absen->tanggal = $request->tanggal;
               $absen->materi = $request->materi;
               $absen->durasi = $request->durasi;
               $absen->catatan = $request->catatan;
               $absen->bulan = $month;
               $absen->save();
          return redirect('/superadmin/absen')->with('msg','Data Berhasil di Simpan');
    }
    public function destroy($id)
     {
          $siswa = Rekap::find($id);
          $siswa->delete();
          return redirect('/superadmin/absen')->with('msg','Data Berhasil di Hapus');
     }
}