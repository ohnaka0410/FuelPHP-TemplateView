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

/**
 * Fuel Template View Package.
 *
 * @package     Fuel
 * @subpackage  TemplateView
 * @author      ohnaka
 * @license     MIT License
 * @copyright   2018 ohnaka
 * @link        https://github.com/ohnaka0410/FuelPHP-TemplateView
 */

\Autoloader::add_core_namespace('Fuel\\TemplateView');

\Autoloader::add_classes(array(
	'Fuel\\TemplateView\\Presenter' => __DIR__.'/classes/presenter.php',
	'Fuel\\TemplateView\\View'      => __DIR__.'/classes/view.php',
));
