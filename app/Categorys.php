<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name', 'description', 'parent_id','active'
    ];
    protected $hidden = [
        'image'
    ];
}

