<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $fillable = ['user_id', 'post_id', 'title', 'body'];
}
