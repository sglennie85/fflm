<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\League;
use App\Models\User\AppUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $account1 = Account::create([
            'name' => 'Test Account',
        ]);

        $user1 = AppUser::create([
             'name' => 'Test User',
             'email' => 'test@test.com',
             'password' => Hash::make('password'),
             'type' => 'app',
             'account_id' => $account1->id,
         ]);

        $account1->update(['owner_id' => $user1->id]);

        $league1 = League::create([
            'name' => 'Test League',
            'description' => 'Initial league for testing purposes',
            'season' => 1,
            'type' => 'league',
            'account_id' => $account1->id,
            'active' => true,
        ]);
    }
}
