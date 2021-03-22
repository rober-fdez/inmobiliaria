<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $table = "states";
    protected $fillable = [
        'country_id',
        'name',
        'description',
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
