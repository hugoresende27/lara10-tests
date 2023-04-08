<?php

namespace App\Models\PipesLda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function plumber(): BelongsTo//Clients Belongs to Plumber
    {
        return $this->belongsTo(Plumber::class, 'plumber_id');
    }

    public function referrals(): HasMany//Client has many Referrals,
    {
        return $this->hasMany(Referral::class, 'client_id');
    }
}
