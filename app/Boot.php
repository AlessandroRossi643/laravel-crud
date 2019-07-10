<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boot extends Model
{
  protected $fillable=['name','description','availability','price','img'];
}
