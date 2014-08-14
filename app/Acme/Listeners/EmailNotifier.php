<?php namespace Acme\Listeners;

use Acme\Jobs\JobWasPosted;
use Acme\Eventing\EventListener;

class EmailNotifier extends EventListener {
	
	public function whenJobWasPosted(JobWasPosted $event)
	{
		var_dump('Send confirmation email about event: ' . $event->job->title);
	}
}