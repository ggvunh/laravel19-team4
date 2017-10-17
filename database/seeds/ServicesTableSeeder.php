<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
          ['id' => 1,'type' =>'0','name' => 'Matxa','price' =>'10000'],
          ['id' => 2,'type' =>'0','name' => 'Tambun','price' =>'20000'],
          ['id' => 3,'type' =>'1','name' => 'Hamberger','price' =>'30000'],
          ['id' => 4,'type' =>'1','name' => 'Pizza','price' =>'40000'],
        ]);
    }
}
