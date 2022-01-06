<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'profile_id' => Profile::DEFAULT,
            'name' => 'Patrick Maciel',
            'email' => 'patrickmaciel.info@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);
    }
}
