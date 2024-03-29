<?php

namespace App;
use App\Fees;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function studentsfees()
    {
        return $this->hasMany(Fees::class);
    }

    protected $dates = [
        'dob',
        'created_at',
        'updated_at'
    ];
}
