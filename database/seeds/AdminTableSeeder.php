<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Admin::create([

        	'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),

        ]);
    }
}
