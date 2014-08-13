<?php namespace Acme\Jobs;

use Acme\Eventing\EventGenerator;

class Job extends \Eloquent {

	use EventGenerator;

	public function post($title, $description)
	{
		$this->title = $title;
		$this->description = $description;

		$this->save();

		$this->raise(new JobWasPosted($this));

		return $this;
	}

} 