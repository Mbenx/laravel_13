<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // whitelist
    protected $fillable = ['name'];

    // comment trial edit

    public function position()
    {
        return $this->hasMany('App\Position');
    }
}
