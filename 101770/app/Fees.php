<?php

namespace App;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function students()
    {
        return $this->belongsTo(Student::class, 'student_no');
    }

    protected $dates = [
        'dop',
        'created_at',
        'updated_at'
    ];
}
