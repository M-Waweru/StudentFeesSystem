<?php

namespace App;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function fee_student()
    {
        return $this->belongsTo(Student::class, 'student_no', 'id');
    }

    protected $dates = [
        'dop',
        'created_at',
        'updated_at'
    ];
}
