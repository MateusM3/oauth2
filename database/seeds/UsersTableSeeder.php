<?php

use Illuminate\Database\Seeder;
use Oauth2\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'mateus' , 'email'=>'mateusmonteirom3@gmail.com' , 'password' => Hash::make('123456')]);
    }
}