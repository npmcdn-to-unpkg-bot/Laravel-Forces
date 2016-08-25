<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPlayerRequest;
use App\Models\Player;
use Illuminate\Http\Request;
use Sessions;
use App\Http\Requests;

class PlayerController extends Controller
{
    public function addPlayer () {
        return view('addPlayer');
    }

    /**
     * @param AddPlayerRequest $request
     * @return array
     */
    public function savePlayer (AddPlayerRequest $request){

        $player = new Player;
        $saved = false;
        $player->name  = request()->name;
        $player->attack  = request()->attack;
        $player->defense  = request()->defense;
        $player->stamina  = request()->stamina;
        $saved = $player->save();
        if ($saved){
            session()->put(['name' => request()->name]);
        }
        return back();
    }

    public function editPlayer () {
        $players = Player::all();
        return view('editPlayer', compact('players'));
    }
}
