# Fuel Template View Package.

## Overview
This Package provide View class and Presenter class with templates

## Installing

Simply add `TemplateView` to your config.php `always_loaded.packages` config option.

## Usage

```php:fuel/app/bootstrap.php
\Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
	'Presenter' => APPPATH.'classes/presenter.php',
));

```

```php:fuel/app/classes/controller/sample.php
class Controller_Sample extends \Controller
{
	public function action_index()
	{
		// Viewをセット
		$view = \Presenter::forge('sample/index');

		return \Response::forge($view);
	}
}
```

```php:fuel/app/classes/presenter.php
class Presenter extends \Fuel\TemplateView\Presenter
{
	/**
	 * Executed before the view method
	 */
	public function before()
	{
		// Sets the view's head template filename.
		$this->set_template_head('template/head');

		// Sets the view's header template filename.
		$this->set_template_header('template/header');

		// Sets the view's footer template filename.
		$this->set_template_footer('template/footer');

		// Sets the view's foot template filename.
		$this->set_template_foot('template/foot');
	}
}
```

```php:fuel/app/classes/presenter/sample.php
class Presenter_Sample extends \Presenter
{
	/**
	 * The default view method
	 * Should set all expected variables upon itself
	 */
	public function view()
	{
		$this->set('title', 'Page Title');
	}
}
```