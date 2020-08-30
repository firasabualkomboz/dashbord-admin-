<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{


    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'section_id', 'featrued','slug'

    ];

    protected $dates =['deleted_at'];


    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }


    public function section(){
        return $this->belongsTo('App\Section');
    }
}
