<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content',  'featrued'
    ];

    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }

}
