<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    public function pictures()
    {
        # code...1
        return $this->hasMany('App\Picture');
    }
}
