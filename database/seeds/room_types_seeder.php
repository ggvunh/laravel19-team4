<?php

use Illuminate\Database\Seeder;

class room_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
        	['id' =>1 , 'name' => 'VIP'],
        	['id' =>2 , 'name' => 'Deluxe'],
        	['id' =>3 , 'name' => 'Family'],
        ]);
    }
}
