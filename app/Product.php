<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $guarded = ['id'];
    public $timestamps = null;
    protected $dates = ['created_at'];

    public function sites(){
        return $this->belongsToMany('App\Site')->withPivot('min','purchase_price','selling_price','initial_stock');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function bills(){
        return $this->belongsToMany('App\Bill','orders')->withPivot('site_id','supplier_id','quantity','purchase_price','status');
    }

    public function invoices(){
        return $this->belongsToMany('App\Invoice','sales')->withPivot('site_id','quantity','selling_price','status');
    }
}
