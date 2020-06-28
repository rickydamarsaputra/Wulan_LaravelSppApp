<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Classroom extends Model
{
    protected $fillable = ['name', 'competence', 'count'];
    public function students()
    {
        return $this->hasMany(Student::class, 'classroom_id', 'id');
    }
}
