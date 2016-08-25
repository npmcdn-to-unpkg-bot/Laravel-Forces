<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddPlayerPageTest extends TestCase
{

	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
	public function test_url_goes_to_right_page()
	{
		$this->visit('/addPlayer')
			->see('Add Player</title>');
	}

	public function test_it_accepts_players()
	{
		$this->visit('/addPlayer')
			->type('Nur','name')
			->press('Add Player')
			->seePageIs('/addPlayer')
			->see('title: "nur"')
            ->see('text:"was added to players"')
			->seeInDatabase('players',["name" => "nur"]);
	}


	public function test_it_refuses_short_name()
	{
		$this->visit('/addPlayer')
			->type('a','name')
			->press('Add Player')
			->seePageIs('/addPlayer')
			->see('swal({   title: "Player Could Not Be Added"');
	}


}
