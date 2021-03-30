<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";

    protected $fillable = ['id','kode','semester','dosen_id','matakuliah_id','prodi_id'];

    public $timestamp = false;

    public function kuisionerkelas()
    {
        return $this->belongsTo('App\kuisionekelas');
    }
}
