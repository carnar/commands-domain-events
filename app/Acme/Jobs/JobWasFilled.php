<?php namespace Acme\Jobs;

class JobWasFilled {

	public $job;

	function __construct(Job $job)
	{
		$this->job = $job;
	}

}