<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesjid extends Model
{
    protected $table = 'mesjid';

    protected $fillable = ['nama', 'alamat', 'Kabupaten', 'Kecamatan', 'foto'];
}
