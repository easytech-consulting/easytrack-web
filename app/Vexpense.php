<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vexpense extends Model
{
    protected $guarded = ['id'];
    public $timestamps = null;
    protected $dates = ['created_at'];

    public function site(){
        return $this->belongsTo('App\Site');
    }
}
