<?php namespace Acme\Jobs;

use Acme\Eventing\EventDispatcher;
use Acme\Commanding\CommandHandlerInterface;

class PostJobListingCommandHandler	implements CommandHandlerInterface  {

	protected $dispatcher;

	public function __construct(EventDispatcher $dispatcher)
	{
		$this->dispatcher = $dispatcher;	
	}

	public function handle($command)
	{	
		$job = Job::post($command->title, $command->description);

		$this->dispatcher->dispatch($job->releaseEvents());
	}

}