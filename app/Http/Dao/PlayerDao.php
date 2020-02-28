<?php

namespace App\Http\Dao;
use App\Model;
use App\Model\Players;
use Illuminate\Support\Facades\DB;

class PlayerDao {

    public static function savePlayer($data) {
        $result = "SUCCESS";
        DB::beginTransaction();

        try{
            foreach ($data['elements'] as $player) {
                Players::updateOrCreate(['id' => $player['id']], $player);
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            $result = "FAILED";
        }

        return $result;
    }

    public static function getPlayers() {
        
        $data = Players::select('id', DB::raw("CONCAT(first_name, ' ', second_name) as fullName"))->get();
        return $data;
    }

    public static function getPlayer($id) {
        
        $data = Players::where('id', $id)->first();
        return $data;
    }
}