<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Http\Services\PlayerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    // Returns list of players
    public function getPlayers() {
        $result = PlayerService::getPlayers();
        if(is_array($result) && count($result) > 0) {
            return response()->json($result);
        }

        return response()->json([
            'message' => $result
        ], 400);
    }
    // Returns specific player
    public function getPlayer(Request $request, Response $response, $id) {
        $result = PlayerService::getPlayer($id);
        if(isset($result['id'])) {
            return response()->json($result);
        }

        return response()->json([
            'message' => $result
        ], 400);
    }

    // Saves players details from the data provider
    public function importData() {
        $url = "https://fantasy.premierleague.com/api/bootstrap-static/";
        $result = PlayerService::importData($url);

        return response()->json([
            'message' => $result
        ], 400);
    }
}
