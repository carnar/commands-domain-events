<?php namespace Acme\Jobs;

use Validator;

class PostJobListingValidator {

	protected static $rules = [
		'title' => 'required',
		'description' => 'required'
	];

	public function validate(PostJobListingCommand $command)
	{
		// Inject dependencies in a big project
		$validator = Validator::make([
			'title' => $command->title,
			'description' => $command->description
		], static::$rules);

		if($validator->fails())
		{
			// throw new ValidationException for example
			dd('validation failed');
		}
	}

}