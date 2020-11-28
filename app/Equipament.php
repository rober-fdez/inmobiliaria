<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipament extends Model
{
    use SoftDeletes;
    protected $table = 'equipaments';
    protected $fillable = ['id', 'name', 'description'];
}
