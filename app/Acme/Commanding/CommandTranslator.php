<?php namespace Acme\Commanding;

class CommandTranslator {

	public function toCommandHandler($command)
	{
		$handler = str_replace('Command', 'CommandHandler', get_class($command));

		if( ! class_exists($handler))
		{
			$message = "Command handler [$handler] does not exists.";
			throw new Exception($message);
		}

		return $handler;		
	}

	public function toValidator($command)
	{
		return str_replace('Command', 'Validator', get_class($command));
	}

}