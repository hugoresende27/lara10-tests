<?php

namespace App\Models\PipesLda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{
    use HasFactory;

    public function client(): BelongsTo// Referrals belongs to Client
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
