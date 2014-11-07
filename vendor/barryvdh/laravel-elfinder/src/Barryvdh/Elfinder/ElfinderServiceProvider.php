<?php namespace Barryvdh\Elfinder;

use Illuminate\Support\ServiceProvider;

class ElfinderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('barryvdh/laravel-elfinder');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	  $this->app['math'] = $this->app->share(function($app)
	  {
	    return new math(2,3);
	  });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('command.elfinder.publish',);
	}

}
