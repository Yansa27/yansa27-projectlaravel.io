<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_model extends Model
{
    public $timestamps = false;
    protected $table = "tbjadwal";
    protected $fillable = ['senin','selasa','rabu','kamis','jumat','sabtu'];
}
