<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = [
       'title', 'image','created_by','updated_by',
    ];
}
