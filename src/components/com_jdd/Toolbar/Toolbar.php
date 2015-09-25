<?php namespace Dane\JDD\Site\Toolbar;

use FOF30\Container\Container;

/**
 * Class Toolbar
 *
 * @package Dane\JDD\Admin\Toolbar
 */
class Toolbar extends \FOF30\Toolbar\Toolbar {

	/**
	 * Renders the toolbar for the component's Add pages
	 *
	 * @return  void
	 */
	public function onAdd()
	{
		$this->setRenderFrontendButtons(true);

		parent::onAdd();
	}

	/**
	 * Renders the toolbar for the component's Edit pages
	 *
	 * @return  void
	 */
	public function onEdit()
	{
		$this->setRenderFrontendButtons(true);

		parent::onEdit();
	}
}