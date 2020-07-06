<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = ['id'];
    public $timestamps = null;
    protected $dates = ['created_at'];

    protected $fillable = [
        "snack_id", 'email', 'town', 'tel1',"tel2", "street", "is_active"
    ];

    public function products(){
        return $this->belongsToMany('App\Product')->withPivot('min','purchase_price','selling_price','initial_stock');
    }

    public function suppliers(){
        return $this->hasMany('App\Supplier');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function snack(){
        return $this->belongsTo('App\Snack');
    }

    public function agendas(){
        return $this->belongsToMany('App\User','agendas')->withPivot('status','start','end');
    }
}
