<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\TemplateView;

/**
 * Presenter
 *
 * A Presenter for Template View.
 *
 * @package     Fuel
 * @subpackage  TemplateView
 * @author      ohnaka
 * @license     MIT License
 * @copyright   2018 ohnaka
 * @link        https://github.com/ohnaka0410/FuelPHP-TemplateView
 */
class Presenter extends \Fuel\Core\Presenter
{
	/**
	 * Sets the view's head template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_head($filename)
	{
		$this->_view->set_template_head($filename);
	}

	/**
	 * Sets the view's header template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_header($filename)
	{
		$this->_view->set_template_header($filename);
	}

	/**
	 * Sets the view's footer template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_footer($filename)
	{
		$this->_view->set_template_footer($filename);
	}

	/**
	 * Sets the view's foot template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_foot($filename)
	{
		$this->_view->set_template_foot($filename);
	}
}

/* end of file Presenter.php */
