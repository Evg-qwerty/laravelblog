<?php

use App\Model\Menu;
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
			AdminFormElement::text('url', 'URL')->required(),
		]);
	});
})->addMenuPage(Menu::class, 2)->setIcon('fa fa-bars');
