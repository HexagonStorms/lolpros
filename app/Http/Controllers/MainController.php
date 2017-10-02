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
        
        // TODO DYNAMIC LIST
        // $list = '?';
        // for ($i = 0; $i < players.length; i++) {
        //     list = list + '&user_login=' + players[i].twitch_username;
        //     // TODO cycle and send the request every 100 iterations.
        //     // This logic should be a promise because this call can have the potential to clal multiple times
        // }
        // console.log(list);
        
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.twitch.tv/helix/streams?user_login=tsm_hauntzer&user_login=tsm_svenkeren&user_login=tsm_bjergsen&user_login=tsm_doublelift&user_login=tsm_biofrost&user_login=akaadian",
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
          Log::info($response);
      }
      
      return response()->json(['players' => $players, 'key' => env('TWITCH_API_KEY')]);
  }
}