<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\User::factory()->create([
    		'name' => "Admin",
    		'username'=>'admin',
    		'mobile'=>rand(1000000000,9999999999),
    		'blood_group'=> rand(1,8),
    		'email' => 'admin@admin.com',
    		'email_verified_at' => now(),
    	    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    	    'remember_token' => Str::random(10)
    	     ]);

    	\App\Models\User::factory(100)->create();
    }
}
