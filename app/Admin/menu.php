<?php

use App\Model\Menu;
use App\Model\Catalog;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Menu::class, function (ModelConfiguration $model) {

	$model->setTitle('Меню');

	// Display
	$model->onDisplay(function () {
		return AdminDisplay::tree()->setValue('title');
	});


	// Create And Edit
	$model->onCreateAndEdit(function() {
		return AdminForm::form()->setItems([
			AdminFormElement::text('title', 'Title')->required(),
			AdminFormElement::select('url', 'Раздел')->setOptions(Catalog::getList())->required(),
			AdminFormElement::checkbox('status', 'Активен'),
			AdminFormElement::checkbox('last', 'Последний в меню'),
			AdminFormElement::checkbox('no_child', 'Нет потомков'),
		]);
	});
})->addMenuPage(Menu::class, 2)->setIcon('fa fa-bars');
