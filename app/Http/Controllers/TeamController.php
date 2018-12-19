<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
	/**
	 * List Teams with Players.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(Team::with('players')->get());
	}

	/**
	 * Show a Team.
	 *
	 * @param  integer  $teamId
	 * @return Response
	 */
	public function show($teamId)
	{
		$team = Team::findOrFail($teamId);

		return response()->json($team, 200);
	}

	/**
	 * Creates a new Team.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$team = Team::create($request->all());

		return response()->json($team, 201);
	}

	/**
	 * Updates a Team.
	 *
	 * @param  integer  $teamId
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $teamId)
	{
		$team = Team::findOrFail($teamId);
		$team->update($request->all());

		return response()->json($team, 200);
	}
}
