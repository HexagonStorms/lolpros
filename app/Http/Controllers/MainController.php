<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use Log;

class MainController extends Controller
{
    public function getData()
    {
        /* DISCLAIMER:
        * This may not always get by teams. There will be
        * more options in the future to sort and get by
        * a variety of different parameters
        */
        $players = Player::with('team')->get();
        $list = '?';
        $i = 0;
        $activeStreams = [];
        foreach($players as $player) {
            $list .= 'user_id=' . $player->twitch_user_id . '&';
            $i++;
            if ($i == 100) {
                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api.twitch.tv/helix/streams" . $list,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "cache-control: no-cache",
                        "client-id: yzim3jwu69i42xbkivk5lj01jbo1pw"
                    ],
                ]);
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                    Log::info("cURL Error #:" . $err);
                } else {
                    // Create array of current streams
                    // Add to $activeStreams;
                    Log::info($response);
                }
                $i = 0;
                $list = '?';
            }
        }
        return response()->json(['players' => $players, 'activeStreams' => $activeStreams, 'key' => env('TWITCH_API_KEY')]); 
    }
}