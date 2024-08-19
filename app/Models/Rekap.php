<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Rekap extends Model
{
    protected $table = 'table_absen';
    protected $fillable = ['id_siswa', 'tanggal', 'materi', 'durasi', 'catatan', 'bulan'];
// public $timestamps = false;
    public function siswa(){
        return $this->belongsTo('App\Models\Siswa', 'id');
    }
}