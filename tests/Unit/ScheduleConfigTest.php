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
				"0700-1500" => [
						"Monday" => [
								"id" => 1,
								"tech"=>true,
								"shift"=>"first"
						],
						"Tuesday" => [
								"id" =>2, 
								"tech"=>true,
								"shift"=>"first"
						],
						"Wednesday" => [
								"id" =>3, 
								"tech"=>true,
								"shift"=>"first"
						],
						"Thursday" => [
								"id" =>4,
								"tech"=>true,
								"shift"=>"first"
						],
						"Friday" => [
								"id" =>5,
								"tech"=>true,
								"shift"=>"first"
						],
						"Saturday" => [
								"id" =>6,
								"tech"=>true,
								"shift"=>"first"
						],
						"Sunday" => [
								"id" =>7,
								"tech"=>true,
								"shift"=>"first"
						],
						
				],
		];

		$this->assertEquals($config, $configtest);
		$this->assertEquals($config['0700-1500']['Monday']['id'], 1);
		
	}
}
