<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // //
    protected $table = 'mahasiswas';
    //primary key
    public $primaryKey= 'id';
    public $timestamps = true;
}
