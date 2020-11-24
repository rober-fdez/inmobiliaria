<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Inmuebletype extends Model
{
    use SoftDeletes;
    protected $table = 'inmuebletypes';
    protected $fillable = ['id', 'name', 'description'];
}
