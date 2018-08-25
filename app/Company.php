<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
//    company contacts

    public function ContactPerson ()
    {
        return $this->hasMany('App\ContactPerson');
    }
    public function ShareHolder ()
    {
        return $this->hasMany('App\ShareHolder');
    }
}
