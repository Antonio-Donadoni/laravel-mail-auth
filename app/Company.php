<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{  protected $fillable = [

    'name',
    'street',
    'city',
    'state',
    'phone_number'
  ];
}
