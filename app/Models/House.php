<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        //not mandatory set foreignKey if the name is modelName_id
//        return $this->belongsTo(User::class, 'user_id');
        return $this->belongsTo(User::class );
    }
}
