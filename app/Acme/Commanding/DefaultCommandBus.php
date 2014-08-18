<?php namespace Acme\Commanding;

use Illuminate\Foundation\Application;

class DefaultCommandBus implements CommandBusInterface {

	protected $commandTranslator;

	private $app;

	public function __construct(Application $app, CommandTranslator $commandTranslator)
	{
		$this->app = $app;
		$this->commandTranslator = $commandTranslator;
	}

	public function execute($command)
	{
		// translate to CommandHandler
		$handler = $this->commandTranslator->toCommandHandler($command);

		// resolve ioc container an handle
		return $this->app->make($handler)->handle($command);
	}

}