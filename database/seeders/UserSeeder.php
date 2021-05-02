<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADMIN',
            'username' => 'admin@fidelia.com',
            'email' => 'admin@fidelia.com',
            'password' => Hash::make('fidelia123'),
            'telephone' => '02129572232',
            'user_role_id' => UserRole::where('name', UserRole::ADMIN)->first()->id,
            'user_type_id' => UserType::where('name', UserType::OFFICER)->first()->id
        ]);
    }
}
