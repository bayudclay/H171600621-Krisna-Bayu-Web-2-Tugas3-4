<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
     protected $table ='artikel';

    	protected $fillable = ['nama', 'users_id'];
}
