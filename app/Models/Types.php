<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    public $timestamps = false;

    public function goods(){
        return $this->hasMany('App\Models\Goods', 'type_id');
    }
}
