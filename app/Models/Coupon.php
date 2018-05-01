<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $table = 'coupon';

    public static function findByCode($code)
    {
        return self::where('code', $code)->first();
    }
    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return round($total - $this->value);
        } else if ($this->type == 'percent') {
            return round( $total - (($this->percent_off / 100) * $total));
        } else {
            return 0;
        }
    }
}