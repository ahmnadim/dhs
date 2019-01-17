<?php

use Illuminate\Database\Seeder;

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
        	'role_id' => '1',
        	'name' => 'Md. Admin',
        	'email' => 'admin@dhs.com',
        	'password' => bcrypt('admin123'),
        	'about' => 'This is about admin',
        	'phone' => '12342',
        	'mobile' => '0197263836',
        	'skype' => 'admin.khan12',
        	'image' => 'dafault.png',
        ]);

        DB::table('users')->insert([
        	'role_id' => '2',
        	'name' => 'Md. User',
        	'email' => 'user@dhs.com',
        	'password' => bcrypt('user123'),
        	'about' => 'This is about user',
        	'phone' => '123423',
        	'mobile' => '0197263846',
        	'skype' => 'user.khan12',
        	'image' => 'dafault.png',
        ]);
    }
}
