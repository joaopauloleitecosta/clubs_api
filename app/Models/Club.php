<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name','description','stadium_capacity','founded','nickname','image'];
}
