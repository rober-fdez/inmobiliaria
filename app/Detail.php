<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use SoftDeletes;
    protected $table = 'details';
    protected $fillable = ['id', 'name', 'description'];
}
