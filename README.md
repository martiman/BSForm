# BSForm
Nette form component by Twitter Bootstrap template

##Usage 1
```
		$bsform = new Forms\BSForm();
		$form = $bsform->getFormClean();
		$form->addGroup('');
		$form->addText('searchText', 'SearchText:');
		$form->addSubmit('doSearch', 'Search!');
```

##Usage 2
```
		$bsform = new Forms\BSForm('Detail');
		$form = $bsform->getFormPanel();
		$form->addGroup('');
		$form->addText('searchText', 'SearchText:');
		$form->addSubmit('doSearch', 'Search!');
```
