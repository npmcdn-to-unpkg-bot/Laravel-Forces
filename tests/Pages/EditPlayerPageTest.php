<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditPlayerPageTest extends TestCase
{

	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
	public function test_url_goes_to_right_page()
	{
		$this->visit('/editPlayer')
			->see('Edit Player</title>');
	}

	public function test_it_loads_players_data_from_db()
	{
		$player =factory(App\Models\Player::class)->create();

		$this->visit('/editPlayer')
			->seeInElement('#player' . $player->id,'<td>' . $player->name . '</td>')
			->seeInElement('#player' . $player->id,'<td>' . $player->attack . '</td>');
	}

	public function test_it_loads_multiple_players_from_db()
	{
		$players =factory(App\Models\Player::class,5)->create();

		$this->visit('/editPlayer');

		foreach($players as $player){
			$this->seeInElement('#player' . $player->id,'<td>' . $player->name . '</td>')
			->seeInElement('#player' . $player->id,'<td>' . $player->attack . '</td>');
		}
	}


}
