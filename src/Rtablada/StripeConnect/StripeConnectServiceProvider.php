<?php namespace Rtablada\StripeConnect;

use Illuminate\Support\ServiceProvider;

class StripeConnectServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['Rtablada\StripeConnectInterface'] = $this->app->share(function($app)
        {
            return new StripeConnect($app->make('config'));
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
