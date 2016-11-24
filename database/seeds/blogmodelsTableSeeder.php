<?php

use Illuminate\Database\Seeder;

class blogmodelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    for ($i=0; $i<=10; $i++) {
		    DB::table('blogmodels')->insert([
			    'title' => 'Статья №'. $i,
			    'url' => 'cont-'.str_random(5),
			    'img' => 'img_'.str_random(5),
			    'description' => str_random(50),
			    'content' => str_random(250),
			    'active' => 1,
			    'created' => DB::raw('CURRENT_TIMESTAMP'),
		    ]);
	    }
    }
}
