<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Siswa extends Model
{
    protected $table = 'table_siswa';
    protected $fillable = ['nama_siswa', 'ttl_siswa', 'nama_ortu', 'nama_sekolah', 'alamat', 'no_telp', 'kelas'];
// public $timestamps = false;
    public function absen(){
        return $this->hasMany('App\Models\Rekap', 'id_siswa');
    }
}