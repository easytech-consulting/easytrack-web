<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = null;
    protected $dates = ['created_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('taxe_id', 'cost', 'price', 'cost', 'qty', 'qty_alert', 'promotion', 'promotion_price', 'promotion_start', 'promotion_end', 'tax_method');
    }

    public function suppliers()
    {
        return $this->hasMany('App\Supplier');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function actions()
    {
        return $this->hasMany('App\Action');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function agendas()
    {
        return $this->belongsToMany('App\User', 'agendas')->withPivot('status', 'start', 'end');
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }

    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    public function fexpenses()
    {
        return $this->hasMany('App\Fexpense');
    }

    public function vexpenses()
    {
        return $this->hasMany('App\Vexpense');
    }

    public function totalPaidSalaries($days = null)
    {
        $total = 0;
        if ($days) {
            foreach ($this->employees->where('status', 'actif') as $emp) {
                $total += $emp->payments->where('is_active', 1)
                    ->where('date_payment', '<=', Carbon::now())
                    ->where('date_payment', '>=', Carbon::today()->subDays($days))
                    ->sum('amount');
            }
        } else {
            foreach ($this->employees->where('status', 'actif') as $emp) {
                $total += $emp->payments->where('is_active', 1)
                    ->where('date_payment', '<', Carbon::now())
                    ->sum('amount');
            }
        }

        return $total;
    }

    public function totalSalaries()
    {
        return $this->employees->where('status', 'actif')->sum('salary');;
    }

    public function totalExpenses($days = null)
    {
        $total = 0;

        if ($days) {
            $total += $this->vexpenses->where('is_active', 1)
                ->where('created_at', '>=', Carbon::today()->subDays($days))
                ->sum('amount');
            foreach ($this->fexpenses->where('is_active', 1) as $fexp) {
                $total += $fexp->expenses->where('is_active', 1)
                    ->where('date_payment', '<=', Carbon::now())
                    ->where('date_payment', '>=', Carbon::today()->subDays($days))
                    ->sum('amount');
            }
        } else {
            $total += $this->vexpenses->where('is_active', 1)
                ->sum('amount');
            foreach ($this->fexpenses->where('is_active', 1) as $fexp) {
                $total += $fexp->expenses->where('is_active', 1)
                    ->where('date_payment', '<=', Carbon::now())
                    ->sum('amount');
            }
        }
    }

    public function allSales($day = null)
    {

        $total = 0;
        if ($day) {
            foreach ($this->sales->where('created_at', Carbon::today())->where('validator_id', '!=', null) as $sale) {
                $total += $sale->total();
            }
        } else {
            foreach ($this->sales->where('validator_id', '!=', null) as $sale) {
                $total += $sale->total();
            }
        }

        return $total;
    }

    public function allPurchases($day = null)
    {

        $total = 0;
        if ($day) {
            foreach ($this->purchases->where('created_at', Carbon::today())->where('validator_id', '!=', null) as $pur) {
                $total += $pur->total();
            }
        } else {
            foreach ($this->purchases->where('validator_id', '!=', null) as $pur) {
                $total += $pur->total();
            }
        }

        return $total;
    }

    public function totalSales($days = null, $category_id = null)
    {
        $total = 0;
        if ($days) {
            if (strlen($days) < 4) {
                foreach ($this->sales->where('created_at', '>=', Carbon::today()->subDays($days))->where('validator_id', '!=', null) as $sale) {
                    $total += $sale->total($category_id);
                }
            } else {
                foreach ($this->sales->where('created_at', '>=', $days . ' 00:00:00')->where('created_at', '<=', $days . ' 23:59:59')->where('validator_id', '!=', null) as $sale) {
                    $total += $sale->total($category_id);
                }
            }
        } else {
            foreach ($this->sales->where('validator_id', '!=', null) as $sale) {
                $total += $sale->total($category_id);
            }
        }

        return $total;
    }

    public function totalPurchases($days = null, $category_id = null)
    {
        $total = 0;
        if ($days) {
            if (strlen($days) < 4) {
                foreach ($this->purchases->where('created_at', '>=', Carbon::today()->subDays($days))->where('validator_id', '!=', null) as $purchase) {
                    $total += $purchase->total($category_id);
                }
            } else {
                foreach ($this->purchases->where('created_at', '>=', $days . ' 00:00:00')->where('created_at', '<=', $days . ' 23:59:59')->where('validator_id', '!=', null) as $purchase) {
                    $total += $purchase->total($category_id);
                }
            }
        } else {
            foreach ($this->purchases->where('validator_id', '!=', null) as $purchase) {
                $total += $purchase->total($category_id);
            }
        }

        return $total;
    }
}
