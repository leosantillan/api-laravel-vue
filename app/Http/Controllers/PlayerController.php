<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

class PlayerController extends Controller
{
	/**
	 * Show a Player.
	 *
	 * @param  integer  $playerId
	 * @return Response
	 */
	public function show($playerId)
	{
		$team = Player::findOrFail($playerId);
		
		return response()->json($team, 200);
	}

	/**
	 * Creates a new Player.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  integer  $teamId
	 * @return Response
	 */
	public function store(Request $request, $teamId)
	{
		$data = $request->all();
		$data['team_id'] = $teamId;

		$player = Player::create($data);

		return response()->json($player, 201);
	}

	/**
	 * Updates a Player.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  integer  $teamId
	 * @param  integer  $playerId
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $teamId, $playerId)
	{
		$player = Player::findOrFail($playerId);
		$player->update($request->all());

		return response()->json($player, 200);
	}
}
