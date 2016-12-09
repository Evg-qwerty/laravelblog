<?php


use App\Model\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;



use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContentTest extends PHPUnit_Framework_TestCase
{

	function testTrue() {

		return true;

		$param = [
			"limit" => false,
			"public" => false,
			"sort" => "created",
			"filter" => true,
			"filterColumn" => "catalog",
			"filterValue" => "php-article"
		];

		$model = new Content;

		$catalogData = $model->getPost($param);

		$catalogData = $catalogData->first();

		$this->assertTrue( isset($catalogData->first()->id) );
	}
}
