<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crate a new user
        $user = new User();
        $user->name  = 'appConsumer01';
        $user->email = 'app_consumer01@email.com';
        $user->password = bcrypt('abc123456');
        $user->save();
    }
}
