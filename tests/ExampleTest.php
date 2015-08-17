<?php

class TestExamples extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
