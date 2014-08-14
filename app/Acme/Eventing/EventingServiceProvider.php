<?php namespace Acme\Eventing;

use Illuminate\Support\ServiceProvider;

class EventingServiceProvider extends ServiceProvider {

	public function register()
	{
		$listeners = $this->app['config']->get('acme.listeners');

		foreach ($listeners as $listener) 
		{
			$this->app['events']->listen('Acme.*', $listener);
		}
	}

}
