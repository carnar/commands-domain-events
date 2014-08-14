<?php namespace Acme\Listeners;

use Acme\Jobs\JobWasPosted;
use Acme\Eventing\EventListener;

class ReportListener extends EventListener {

	public function whenJobWasPosted(JobWasPosted $event)
	{
		var_dump('do something related to reporting');
	}

}