<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Snack extends Model
{
    use SoftDeletes;
    
    protected $guarded = ['id'];
    public $timestamps = null;
    protected $dates = ['created_at'];

    public function sites(){
        return $this->hasMany('App\Site');
    }

    public function types(){
        return $this->belongsToMany('App\Type','subscriptions')->withPivot('end_date','status');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
