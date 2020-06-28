<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Spp;
use App\Payment;

class PaymentDetail extends Model
{
    use SoftDeletes;

    protected $fillable = ['payment_id', 'spp_id'];
    public function spp()
    {
        return $this->hasOne(Spp::class, 'id', 'spp_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }
}
