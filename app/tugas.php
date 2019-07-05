<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tugas extends Model
{
    protected $table = 'tugas';

    protected $fillable = ['nama','umur','hobi','alamat','jeniskelamin'];

}
