<?php namespace Acme\Jobs;

use Acme\Commanding\CommandHandlerInterface;

class PostJobListingCommandHandler	implements CommandHandlerInterface  {

		public function handle($command)
		{
			var_dump('delegate process of posting a job');
		}

}