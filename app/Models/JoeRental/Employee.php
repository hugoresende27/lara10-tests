<?php

namespace App\Models\JoeRental;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Employee extends Model
{
    use HasFactory;

//    public function car(): HasOne
//    {
//        return $this->hasOne(Car::class, 'employee_id');
//    }

    public function car(): MorphOne
    {
        return $this->morphOne(Car::class, 'carable');
    }
}
