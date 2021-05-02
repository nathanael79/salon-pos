<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $datum){
            UserType::create([
                'name' => $datum
            ]);
        }
    }

    private function getData(){
        return [
            'OFFICER',
            'MEMBER'
        ];
    }
}
