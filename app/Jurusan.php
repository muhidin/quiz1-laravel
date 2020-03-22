<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //berikan nama table
    public $table = 'jurusan';
    // ijinkan agar semua kolom dapat di isi dan simpan
    protected $guarded = [];
}
