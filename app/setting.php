<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
   protected $fillable=[ 'apointment_intro', 'logo', 'intro_image', 'service_image', 'about', 'working_time', 'address', 'facebook', 'twitter', 'google'];
}
