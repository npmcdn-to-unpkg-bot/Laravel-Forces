<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlayerControllerTest extends TestCase
{

	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_adds_players()
    {
        $this->action("post","PlayerController@savePlayer",[],["name" => "adam","attack" => 3,"defense" => 3, "stamina" => 3]);
		$this->seeInDatabase('players',["name" => "adam","attack" => 3,"defense" => 3, "stamina" => 3]);

    }
}
