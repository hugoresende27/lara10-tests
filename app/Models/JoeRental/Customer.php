<?php

namespace App\Models\JoeRental;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Customer extends Model
{
    use HasFactory;

//    public function car(): HasOne
//    {
//        return $this->hasOne(Car::class, 'customer_id');
//    }

    /**
     * @return MorphOne
     *  $customer = \App\Models\JoeRental\Customer::first()
     *  $customer->car()->create(['manufacturer' => 'AUDI']);
     *
     */
    public function car(): MorphOne
    {
        return $this->morphOne(Car::class, 'carable');
    }
}
