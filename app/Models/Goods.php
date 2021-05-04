<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public $timestamps = false;


    public function customers(){
        return $this->belongsToMany('App\Models\Customers', 'customer_good', 'good_id',
            'customer_id');
    }
}
