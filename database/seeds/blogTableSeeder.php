<?php

use Illuminate\Database\Seeder;
use App\Model\Content;

class blogTableSeeder extends Seeder
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

/*Schema::create('blogmodels', function (Blueprint $table) {
	$table->increments('id');
	$table->string('title')->nullable(); // Заголовок
	$table->string('url')->unique(); // урл для сылки
	$table->string('img')->nullable(); // урл картинки
	$table->text('description')->nullable(); // короткая версия
	$table->text('content')->nullable(); // полная версия
	$table->boolean('active')->default(false); // статус
	$table->timestamp('created')->nullable(); // дата создания
	$table->timestamps();
});*/