<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Player;
use Log;

class getIds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twitch:get-ids';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activating this command will first get all records in the `players` table that have `twitch_user_id` as null. Then call Twitch by their twitch user login and get their user_id and save to the database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $players = Player::where('twitch_user_id', null)->get();
        $count = $players->count();
        
        $this->info('Getting Twitch User IDs for ' . $count . ' players');
        $list = '?';
        
        foreach($players as $player) {
            $list .= 'login=' . $player->twitch_username . '&';
        }
        Log::info($list);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.twitch.tv/helix/users" . $list,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "client-id: yzim3jwu69i42xbkivk5lj01jbo1pw"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          $this->error("cURL Error #:" . $err);
        }
        $response = json_decode($response, true);
        $twitchCount = count($response['data']);
                
        $this->info('Retrieved User IDs for ' . $twitchCount . ' players');
        
        foreach($response['data'] as $user) {
            $player = Player::where('twitch_username', $user['login'])->first();
            $player->twitch_user_id = $user['id'];
            $player->save();
        }
        
        if ($twitchCount != $count) {
            $difference = $count - $twitchCount;
            $this->error($difference . ' player ID(s) could not be found. Here they are:');
            $players = Player::where('twitch_user_id', null)->get();
            foreach($players as $player) {
                $this->line($player->handle . ': ' . $player->twitch_username);
            }
        }
    }
}
