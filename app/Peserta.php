<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    //berikan nama table
    public $table = 'peserta';
    // ijinkan agar semua kolom dapat di isi dan simpan
    protected $guarded = [];
}
