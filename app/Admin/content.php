<?php

use App\Model\Content;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(

	Content::class, function (ModelConfiguration $model) {

	$model->setTitle('Статьи');

	// Display
	$model->onDisplay(function () {
		return AdminDisplay::table()->setApply(function($query) {
			$query->orderBy('created', 'desc');
		})->setColumns([
			AdminColumn::link('title')->setLabel('Title'),
			AdminColumn::link('description')->setLabel('Description'),
			AdminColumn::datetime('created')->setLabel('Date')->setFormat('d.m.Y')->setWidth('150px'),
			AdminColumnEditable::checkbox('active')->setLabel('Published'),
		])->paginate(5);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::form()->setItems([
			AdminFormElement::text('title', 'Title')->required(),
			AdminFormElement::text('url', 'Seo Url')->required(),
			AdminFormElement::text('description', 'Краткое описание')->required(),
			AdminFormElement::date('created', 'Date')->required()->setFormat('d.m.Y'),
			AdminFormElement::checkbox('active', 'Published'),
			AdminFormElement::wysiwyg('content', 'Text'),
		]);
		$form->getButtons()
			->setSaveButtonText('Save')
			->hideSaveAndCloseButton();
		return $form;
	});
})
	->addMenuPage(Content::class, 0)
	->setIcon('fa fa-bank');