<?php

namespace App\Http\Controllers;

use App\Lobby;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LobbyController extends Controller
{
    public function list()
    {
        $lobbies = Lobby::query()->where('is_closed', 0)->where('is_hidden', 0)->orderByDesc('created_at')->get();


        return view('lobby.list', compact('lobbies'));
    }

    public function show(int $id)
    {
        $lobby = Lobby::query()->findOrFail($id);

        return view('lobby.show', compact('lobby'));
    }

    public function create()
    {
        $maps = Map::all();

        return view('lobby.create', compact('maps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'map_id' => 'required'
        ]);
        $lobby = new Lobby();
        $lobby->map_id = $request->map_id;
        $lobby->user_id = 1; //Auth::id();
        if (!empty($request->is_hidden)) {
            $lobby->is_hidden = (int)$request->is_hidden;
        }
        if (!empty($request->is_etalon_mode)) {
            $lobby->is_etalon_mode = (int)$request->is_etalon_mode;
        }
        $lobby->description = $request->description ?? '';

        $lobby->save();

        return view('lobby.show', compact('lobby'));
    }
}
