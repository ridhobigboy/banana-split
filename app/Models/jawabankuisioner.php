<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawabankuisioner extends Model
{
    use HasFactory;
    protected $table = "jawabankuisioner";

    protected $fillable = ['id', 'jawaban'];

    public $timestamp = false;

    public function kuisionerkelas()
    {
        return $this->belongsTo('App\kuisionerkelas');
    }
}
