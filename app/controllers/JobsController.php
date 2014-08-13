<?php

class JobsController extends \BaseController {

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
		new PostJobListingCommand($input['title'],  $input['description']);
	}

}
