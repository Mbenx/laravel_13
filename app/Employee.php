<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name','alamat','phone','email','position_id','picture'];

    public function position(){
        return $this->belongsTo('App\Position');
    }

    public function inventory(){
        // return $this->belongsToMany('App\Inventory');
        return $this->belongsToMany('App\Inventory')->
        withPivot('description', 'created_at');
    }
}
