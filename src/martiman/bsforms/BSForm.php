<?php

namespace martiman\bsforms;

use Nette,
    Nette\Application\UI,
	Nette\Utils\Html;
use Tracy\Debugger;

class BSForm extends UI\Control {

	public $templateName;
	private $form;
	private $formName;

	public function __construct($formName = '') {
		//parent::__construct();
		$this->formName = $formName;
	}

	private function getForm($templateName = 'form.latte')
	{
		if (!isset($this->form)) {
			$this->form = new UI\Form;
			// mohu použít $this->database

			if ($templateName != '') {
				$this->templateName = $templateName;
			}
		}

		return $this->form;
	}

	public function getFormClean() {
		return $this->getForm('BSFormClean.latte');
	}

	public function getFormPanel() {
		return $this->getForm('BSFormPanel.latte');
	}


	public function render() {

		$template = $this->getTemplate();
		$template->setFile(__DIR__ . '/' . $this->templateName);
		Debugger::barDump($this->templateName);
		$template->controlClass = 'col-md-3';
		$template->form = $this->getForm();
		$template->formName = $this->formName;
		$template->render();
	}

}
