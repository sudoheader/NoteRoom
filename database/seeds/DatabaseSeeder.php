<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        for ($x = 0; $x <= 10; $x++) {
             DB::table('nrs')->insert([
            'title' => str_random(10),
            'invite' => str_random(10).'@my.csun.edu',
            'notes' => str_random(20),
        ]);
        } 
       
    }
}