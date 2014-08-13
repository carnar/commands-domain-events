<?php namespace Acme\Eventing;

use Illuminate\Log\Writer;
use Illuminate\Events\Dispatcher;

class EventDispatcher {

	protected $event;

	protected $log;

	public function __construct(Dispatcher $event, Writer $log)
	{
		$this->event = $event;
		$this->log = $log;
	}

	public function dispatch(array $events)
	{
		foreach ($events as $event) 
		{
			$eventName = $this->getEventName($event);

			$this->event->fire($eventName, $event);	

			$this->log->info("$eventName was fired.");
		}
	}

	public function getEventName($event)
	{
		return str_replace('\\', '.', get_class($event));		
	}

}