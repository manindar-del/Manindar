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
        DB::table('users')->delete();
        User::create(array('username' => 'admin', 'password' => Hash::make('admin'), 'email' => 'setkyar16@gmail.com'));
     }
    }
