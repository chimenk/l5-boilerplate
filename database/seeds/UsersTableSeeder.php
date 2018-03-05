<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'admin',
        	'email' => 'admin@admin.com',
        	'first_name' => 'Super',
        	'last_name' => 'Admin',
        	'password' => bcrypt('123456')
        ]);
    }
}
