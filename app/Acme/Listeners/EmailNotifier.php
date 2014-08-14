<?php namespace Acme\Listeners;

use Acme\Jobs\JobWasPosted;
use Acme\Jobs\JobWasFilled;
use Acme\Eventing\EventListener;

class EmailNotifier extends EventListener {
	
	public function whenJobWasPosted(JobWasPosted $event)
	{
		var_dump('Send confirmation email about event: ' . $event->job->title);
	}

	public function whenJobWasFilled(JobWasFilled $event)
	{
		var_dump('Send congratulations email to the employer about the job: ' . $event->job->title);
	}
}