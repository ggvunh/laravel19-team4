<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
        	['id' =>1 , 'mount' => '2'],
        	['id' =>2 , 'mount' => '4'],
        	['id' =>3 , 'mount' => '6'],
        ]);
    }
}
