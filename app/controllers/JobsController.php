<?php

use Acme\Jobs\JobFilledCommand;
use Acme\Jobs\PostJobListingCommand;

class JobsController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('title', 'description');

		$command = new PostJobListingCommand($input['title'],  $input['description']);

		$this->commandBus->execute($command);
	}

	/**
	 * Set job as filled
	 */
	public function delete($id)
	{
		$command = new JobFilledCommand($id);

		$this->commandBus->execute($command);
	}

}
