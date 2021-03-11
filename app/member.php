<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    protected $fillable=['categ_id','name','bio','avatar'];

    public function gteCategory(){
        return $this->hasOne('App\category' ,'id' , 'categ_id');
    }
}
