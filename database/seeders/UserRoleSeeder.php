<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $datum){
            UserRole::create([
                'name' => $datum
            ]);
        }
    }

    private function getData(){
        return [
            'ADMIN',
            'CASHIER'
        ];
    }
}
