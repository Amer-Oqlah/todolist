<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable =['title','user_id'];
}
