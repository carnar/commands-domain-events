<?php namespace Acme\Jobs;

class JobFilledCommand {

	public $jobId;

	public function __construct($jobId)
	{
		$this->jobId = $jobId;
	}

}