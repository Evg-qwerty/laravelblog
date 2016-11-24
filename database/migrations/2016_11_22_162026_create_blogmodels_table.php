<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	/*
    	 * ID +
    	 * Заголовок +
    	 * урл +
    	 * урл картинки +
    	 * короткая версия статьи +
    	 * полная версия статьи +
    	 * Дата публикации
    	 * состояние вкл выкл
    	 */
        Schema::create('blogmodels', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title')->nullable(); // Заголовок
	        $table->string('url')->unique(); // урл для сылки
	        $table->string('img')->nullable(); // урл картинки
	        $table->text('description')->nullable(); // короткая версия
	        $table->text('content')->nullable(); // полная версия
	        $table->boolean('active')->default(false); // статус
	        $table->timestamp('created')->nullable(); // дата создания
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogmodels');
    }
}
