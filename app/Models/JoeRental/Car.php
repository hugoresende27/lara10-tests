<?php

namespace App\Models\JoeRental;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

//    public function employee(): BelongsTo
//    {
//        return $this->BelongsTo(Employee::class, 'car_id');
//    }
//
//    public function customer(): BelongsTo
//    {
//        return $this->BelongsTo(Customer::class, 'car_id');
//    }


    public function carable(): MorphTo
    {
        return $this->morphTo();
    }
}
