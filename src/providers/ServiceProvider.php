<?php

namespace ActivismeBe\ErrorPages\Providers;

use Illuminate\Support\ServiceProvider as BaseProvider;

/**
 * @todo: Implement docblock. 
 */
class ServiceProvider extends BaseProvider
{
	/**
	 * Register bindings in the container.
	 * 
	 * @return void
	 */
	public function register() 
	{
		// 
	}

	/**
	 * Bootstrap any application services. 
	 * 
	 * @return void
	 */
	public function boot() 
	{
		// Place the view in the application.
		$this->publishes([
			__DIR__ . '/../resources/views/pages' 	=> resource_path('views/errors'), 
			__DIR__ . '/../resources/views/layouts'	=> resource_path('views/layouts'),
			__DIR__ . '/../resources/css' 			=> public_path('css')
		]);
	}
}