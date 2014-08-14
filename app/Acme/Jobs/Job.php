<?php namespace Acme\Jobs;

use Acme\Eventing\EventGenerator;

class Job extends \Eloquent {

	use EventGenerator; 

	protected $fillable = ['title', 'description'];

	public static function post($title, $description)
	{
		$job = static::create(compact('title', 'description'));

		$job->raise(new JobWasPosted($job));

		return $job;
	}

} 