<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Pic extends Model
{
    protected $table = 'table_pic';
    protected $fillable = ['id_pic', 'id_kar1', 'id_kar2', 'id_kar3', 'id_kar4', 'id_kar5'];
// public $timestamps = false;
}