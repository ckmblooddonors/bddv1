<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username'=>'administrator',
            'mobile'=> '0000000000',
            'is_admin'=>1,
            'blood_group'=>1,
            'password' => bcrypt('password'),
        ]);

    }
}
