<?php

use App\Model\Content;
use App\Model\Catalog;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(

	Content::class, function (ModelConfiguration $model) {

	$model->setTitle('Статьи');

	//$catalog = DB::table('catalogs')->list('title');
	//dd($catalog);

	// Display
	$model->onDisplay(function () {
		return AdminDisplay::datatables()->setApply(function($query) {
			$query->orderBy('created', 'desc');
		})->setColumns([
			AdminColumn::text('id')->setLabel('ID'),
			AdminColumn::text('title')->setLabel('Title'),
			AdminColumn::text('catalog')->setLabel('Раздел'),
			AdminColumn::text('description')->setLabel('Description'),
			AdminColumn::datetime('created')->setLabel('Date'),
			AdminColumnEditable::checkbox('active')->setLabel('Published'),
		])->paginate(20);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {

		$form = AdminForm::form()->setItems([
			AdminFormElement::text('title', 'Title')->required(),
			AdminFormElement::text('url', 'Seo Url')->required(),
			AdminFormElement::select('catalog', 'Раздел')->setOptions(Catalog::getList())->required(),
			AdminFormElement::wysiwyg('description', 'Краткое описание')->required(),
			AdminFormElement::timestamp('created', 'Date')->required(),
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
	->setIcon('fa fa-book');
