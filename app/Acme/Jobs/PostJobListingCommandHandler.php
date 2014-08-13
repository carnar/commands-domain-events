<?php namespace Acme\Jobs;

use Acme\Eventing\EventDispatcher;
use Acme\Commanding\CommandHandlerInterface;

class PostJobListingCommandHandler	implements CommandHandlerInterface  {

	protected $job;

	protected $dispatcher;

	public function __construct(Job $job, EventDispatcher $dispatcher)
	{
		$this->job = $job;
		$this->dispatcher = $dispatcher;	
	}

	public function handle($command)
	{
		$job = $this->job->post(
			$command->title,
			$command->description
		);

		$this->dispatcher->dispatch($job->releaseEvents());
	}

}