<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //First Support/Customer user
        User::insert([
            [
                'uuid' => generateUuid4(),
                'name' => 'John Doe',
                'email' => 'JohnDoe@gmail.com',
                'password' => bcrypt('123456'),
                'is_customer' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => generateUuid4(),
                'name' => 'Marry Doe',
                'email' => 'MarryDoe@gmail.com',
                'password' => bcrypt('123456'),
                'is_customer' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
