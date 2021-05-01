<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name','department_id'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function employee()
    {
        return $this->hashMany('App\Employee');
    }
}
