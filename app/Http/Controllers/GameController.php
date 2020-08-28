<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index', ['games'=> Game::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gameName' => ['required', 'max:50'],
            'gameDescription' => ['required']
        ]);
        $game = new Game;
        $game->name = $request->input('gameName');
        $game->descripion = $request->input('gameDescription');
        $game->photo = $request->input('gameImage');
        $game->score = $request->input('gameScore');
        $game->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', ['game'=> $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'gameName' => ['required', 'max:50'],
        ]);
        $game->name = $request->gameName;
        $game->description = $request->gameDescription;
        $game->descripion = $request->gameDescriptio;
        $game->photo = $request->gameImage;
        $game->score = $request->gameScore;
        $game->save();
        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return back();
    }
}
