<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\PaymentDetail;
use App\Student;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = ['student_id', 'user_id', 'total_payment'];
    public function student()
    {
        return $this->hasOne(Student::class, 'id', 'student_id');
    }
    public function paymentDetails()
    {
        return $this->hasMany(PaymentDetail::class, 'payment_id', 'id');
    }
}
