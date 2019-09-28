<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table ='artikel';

    	protected $fillable = ['nama', 'users_id'];
}
