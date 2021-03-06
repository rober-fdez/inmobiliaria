<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $table = 'countries';
    protected $fillable = ['id', 'name', 'description'];

    public function states(){
        return $this->belongsToMany(State::class);
    }
}
