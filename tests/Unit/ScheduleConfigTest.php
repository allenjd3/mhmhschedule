<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScheduleConfigTest extends TestCase
{
	/** @test */
	public function schdule_config_can_be_loaded()
	{
	   	include app_path() . '/Schedule/config_test.php'; 
		$configtest = [
				"monday" => [
						"id"=>1,
						"shift"=>"0700-1530"
				]
		];

		$this->assertEquals($config, $configtest);
		$this->assertEquals($config['monday']['id'], 1);
		
	}
}
