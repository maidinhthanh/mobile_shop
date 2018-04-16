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
        $data = [
        	[
        		'email'=>'thanh@gmail.com',
        		'password'=>'123456',
        		'level'=>2
        	],
        	[
        		'email'=>'nam@gmail.com',
        		'password'=>'123456',
        		'level'=>1
        	]
        ];

        DB::table('vp_users')->insert($data);
    }
}
