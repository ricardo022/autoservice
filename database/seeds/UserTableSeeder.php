<?php

use Illuminate\Database\Seeder;

class UserTableSeeder Extends Seeder {

    public function run()
   {
       \DB::table('users')->insert(array (
           'name'     => 'ricardo',
           'email'    => 'ricardo.burgos@gmail.com',
           'password' => \Hash::make('secret')
       ));

   }

}