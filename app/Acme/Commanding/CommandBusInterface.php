<?php namespace Acme\Commanding;

interface CommandBusInterface {

	public function execute($command);

}