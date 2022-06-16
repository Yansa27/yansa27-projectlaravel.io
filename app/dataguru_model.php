<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataguru_model extends Model
{
    public $timestamps = false;
    protected $table = "tbguru";
    protected $fillable = ['nama','nip','mata_pelajaran'];
}
