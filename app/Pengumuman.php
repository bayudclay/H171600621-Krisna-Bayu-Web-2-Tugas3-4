<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table ='artikel';

    	protected $fillable = ['nama', 'users_id'];

    	protected $casts=[ ];
}
