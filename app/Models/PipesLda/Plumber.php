<?php

namespace App\Models\PipesLda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Plumber extends Model
{
    use HasFactory;


    public function clients(): HasMany//Plumber has many Clients,
    {
        return $this->hasMany(Client::class, 'plumber_id');
    }

    public function referrals(): HasManyThrough//Plumber has many Referrals Through Client
    {
        return $this->hasManyThrough(Referral::class, Client::class, 'plumber_id','client_id');
    }
    public function referral(): HasOneThrough//Plumber has one Referral Through Client //for demo purposes, not real a plumber only have one referral
    {
        return $this->hasOneThrough(Referral::class, Client::class, 'plumber_id','client_id');
    }
}
