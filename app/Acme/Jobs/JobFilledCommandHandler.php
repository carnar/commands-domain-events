<?php namespace Acme\Jobs;

use Acme\Eventing\EventDispatcher;
use Acme\Commanding\CommandHandlerInterface;

class JobFilledCommandHandler implements CommandHandlerInterface {

	protected $job;

	protected $dispatcher;

	function __construct(Job $job, EventDispatcher $dispatcher)
	{
		$this->job = $job;
		$this->dispatcher = $dispatcher;
	}

	public function handle($command)
	{
		$job = $this->job->findOrFail($command->jobId);

		$job->archive();

		$this->dispatcher->dispatch($job->releaseEvents());
	}

}