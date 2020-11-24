<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operationtype extends Model
{
    use SoftDeletes;
    protected $table = 'operationtypes';
    protected $fillable = ['id', 'name', 'description'];
}
