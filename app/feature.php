<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    //

    protected $fillable=['title' , 'desc' , 'icon','type'];
    // protected $table='features';
}
