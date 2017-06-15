<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
     /*public function producttypes(){
        return $this->hasOne('App\Category','category_id');
    }
    public function providers(){
        return $this->belongsTo('App\Provideer_type');
    }*/
    protected $filled =[
    'name', 'slug','description', 'extract', 'price', 'image', 'visible', 'category_id', 'provideer_id'];

}
