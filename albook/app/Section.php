<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function Books()
    {
        return $this->hasMany('App\Book');
    }
}
