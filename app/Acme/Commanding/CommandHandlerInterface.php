<?php namespace Acme\Commanding;

interface CommandHandlerInterface {

	/**
	 * Handle the command
	 *
	 * @param  $command 
	 * @return mixed
	 */
	public function handle($command);

}