<?php

use App\Model\User;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(

	User::class, function (ModelConfiguration $model) {

	$model->setTitle('Пользователи');

	// Display
	$model->onDisplay(function () {
		return AdminDisplay::table()->setApply(function($query) {
			$query->orderBy('created_at', 'desc');
		})->setColumns([
			AdminColumn::link('id')->setLabel('ID'),
			AdminColumn::link('name')->setLabel('Имя'),
			AdminColumn::link('email')->setLabel('Email'),
			AdminColumn::datetime('created_at')->setLabel('Дата создания')->setFormat('d.m.Y')->setWidth('150px')
		])->paginate(5);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::form()->setItems([
			AdminFormElement::text('name', 'Имя')->required(),
			AdminFormElement::text('email', 'Email')->required()
		]);
		$form->getButtons()
			->setSaveButtonText('Save')
			->hideSaveAndCloseButton();
		return $form;
	});
})
	->addMenuPage(User::class, 1)
	->setIcon('fa fa-bank');