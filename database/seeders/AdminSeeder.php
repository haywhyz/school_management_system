<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name'=>'Adminstrator',
                'email'=>'admin@school.com',
                'password'=>bcrypt('admin@school.com'), 
            ]);
        // SELECT `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at` FROM `users` WHERE 1
    }
}
