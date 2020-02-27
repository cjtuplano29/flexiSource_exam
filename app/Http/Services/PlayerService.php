<?php

namespace App\Http\Services;

use App\Http\Dao\PlayerDao;

class PlayerService
{
    public static function importData($url) {
        $players = self::curlRequest($url);
        $result = "Players details was successfully imported.";
        if (isset($players['elements'])) {
            // save to db
            $result = PlayerDao::savePlayer($players);
            if($result == "FAILED") {
                $result = "Failed to save data to the database.";
            }
        }else {
            $result = "'Elements' field does not exists. Please check data provider properties.";
        }
        
        return $result;
    }

    public static function getPlayers() {
        $players = PlayerDao::getPlayers();
        if(count($players) == 0) {
            $result = "No result found";
            return $result;
        }
        return json_decode($players, true);
    }

    public static function getPlayer($id) {
        $player = PlayerDao::getPlayer($id);
        if(!isset($player['id'])) {
            $result = "No result found";
            return $result;
        }
        return json_decode($player, true);
    }

    public static function curlRequest($url) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return json_decode($response, true);
        }
    }
}
