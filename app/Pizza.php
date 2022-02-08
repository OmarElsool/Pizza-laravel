<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
  protected $casts = [
    'toppings' => 'array',
  ];
}
