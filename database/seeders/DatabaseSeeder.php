<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\PipesLda\Client;
use App\Models\PipesLda\Plumber;
use App\Models\PipesLda\Referral;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(20)->create();
//         Plumber::factory(20)->create();
//         Client::factory(20)->create();
//         Referral::factory(20)->create();
         Group::factory(20)->create();
         GroupUser::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
