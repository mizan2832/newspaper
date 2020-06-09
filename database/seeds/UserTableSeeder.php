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
            'name' 	   => 'Admin Mizan',
            'username' => 'admin',
            'role_id'  =>  1,
            'email'	   => 'mrahman5037@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
        DB::table('users')->insert([
            'name' 	   => 'Author Mizan',
            'username' => 'author',
            'role_id'  =>  2,
            'email'	   => 'programmer620@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
        DB::table('users')->insert([
            'name' 	   => 'Author Farjana',
            'username' => 'author',
            'role_id'  =>  3,
            'email'	   => 'farjana@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
        DB::table('users')->insert([
            'name' 	   => 'Editor',
            'username' => 'editor',
            'role_id'  =>  3,
            'email'	   => 'editor@gmail.com',
            'password' =>  bcrypt('12345678'),
            
        ]);
    }
}
