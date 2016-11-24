<?php

use Illuminate\Database\Seeder;

class testTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('tests')->insert([
		    'title' => 'Название материала',
		    'active' => 1,
	    ]);
    }
}
