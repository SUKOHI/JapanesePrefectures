<?php namespace Sukohi\JapanesePrefectures;

use Illuminate\Support\ServiceProvider;

class JapanesePrefecturesServiceProvider extends ServiceProvider {

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
		$this->package('sukohi/japanese-prefectures');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['JapanesePrefectures'] = $this->app->share(function($app)
		{
			return new JapanesePrefectures;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('JapanesePrefectures');
	}

}
