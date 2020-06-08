<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' 	   => 'Mizanur Rahman',
            'username' => 'admin',
            'role_id'  =>  1,
            'email'	   => 'mrahman5037@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
        DB::table('users')->insert([
            'name' 	   => 'Mizan',
            'username' => 'author',
            'role_id'  =>  2,
            'email'	   => 'programmer620@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
    }
}
