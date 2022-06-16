<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasiswa_model extends Model
{
    public $timestamps = false;
    protected $table = "tbsiswa";
    protected $fillable = ['nama','nisn','kelas','email'];
}
