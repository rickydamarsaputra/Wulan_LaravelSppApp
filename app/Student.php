<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classroom;
use App\Payment;

class Student extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'nisn', 'nis', 'classroom_id'];
    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'id', 'classroom_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'student_id', 'id');
    }
}
