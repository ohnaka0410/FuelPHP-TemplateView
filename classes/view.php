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
 * View
 *
 * A View for easily creating templated output.
 *
 * @package     Fuel
 * @subpackage  TemplateView
 * @author      ohnaka
 * @license     MIT License
 * @copyright   2018 ohnaka
 * @link        https://github.com/ohnaka0410/FuelPHP-TemplateView
 */
class View extends \Fuel\Core\View
{
	/**
	 * @var string  The view's head template filename
	 */
	protected $template_head = null;

	/**
	 * @var  string  The view's header template filename
	 */
	protected $template_header = null;

	/**
	 * @var  string  The view's footer template filename
	 */
	protected $template_footer = null;

	/**
	 * @var  string  The view's foot template filename
	 */
	protected $template_foot = null;

	/**
	 * Sets the view's head template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_head($filename)
	{
		$this->template_head = $filename;
	}

	/**
	 * Sets the view's header template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_header($filename)
	{
		$this->template_header = $filename;
	}

	/**
	 * Sets the view's footer template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_footer($filename)
	{
		$this->template_footer = $filename;
	}

	/**
	 * Sets the view's foot template filename.
	 *
	 * @param  string  $filename  template filename
	 */
	public function set_template_foot($filename)
	{
		$this->template_foot = $filename;
	}

	/**
	 * Renders the view and template views object to a string.
	 *
	 * @param    $file  string  view filename
	 * @return   string
	 * @throws   \FuelException
	 */
	public function render($file = null)
	{
		$return = '';

		// render the head template file
		$return .= ( ! empty($this->template_head) and is_string($this->template_head))
			? parent::forge($this->template_head, $this)->render()
			: '';

		// render the header template file
		$return .= ( ! empty($this->template_header) and is_string($this->template_header))
			? parent::forge($this->template_header, $this)->render()
			: '';

		// render the view file
		$return .= parent::render($file);

		// render the footer template file
		$return .= ( ! empty($this->template_footer) and is_string($this->template_footer))
			? parent::forge($this->template_footer, $this)->render()
			: '';

		// render the foot template file
		$return .= ( ! empty($this->template_foot) and is_string($this->template_foot))
			? parent::forge($this->template_foot, $this)->render()
			: '';

		return $return;
	}
}

/* end of file view.php */
