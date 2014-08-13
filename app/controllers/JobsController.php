<?php

use Acme\Jobs\PostJobListingCommand;
use Acme\Commanding\CommandBus;

class JobsController extends \BaseController {

	protected $commandBus;

	public function __construct(CommandBus $commandBus)
	{
		$this->commandBus = $commandBus;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// if not go back
		// otherwise create job in db
		// send user confirmation email
		// notify all listeners of a particular job tag
		
		$input = Input::only('title', 'description');

		$command = new PostJobListingCommand($input['title'],  $input['description']);

		$this->commandBus->execute($command);
	}

}
