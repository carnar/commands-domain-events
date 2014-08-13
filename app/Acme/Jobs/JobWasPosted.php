<?php namespace Acme\Jobs;

class JobWasPosted {

	public $job;

	public function __construct(Job $job)
	{
		$this->job = $job;
	}

}