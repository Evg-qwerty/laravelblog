<?php

use App\Model\Catalog;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Catalog::class, function (ModelConfiguration $model) {

	$model->setTitle('Каталог');

	// Display
	$model->onDisplay(function () {
		return AdminDisplay::tree()->setValue('title');
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		return AdminForm::form()->setItems([
			AdminFormElement::text('title', 'Title')->required(),
			AdminFormElement::text('url', 'Адрес')->required(),
			AdminFormElement::checkbox('active', 'Активен'),
			AdminFormElement::wysiwyg('description', 'Описание'),
		]);
	});
})->addMenuPage(Catalog::class, 0)->setIcon('fa fa-book');
