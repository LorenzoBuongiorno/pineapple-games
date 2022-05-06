<?php

use App\Games;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $games = json_decode(file_get_contents(storage_path() . "\data\Games.json"), true);
        
        
        // dd($games[0]);
  
        foreach ($games as  $game) {
        // dd($game['title']);

            $newGame = new Games();
            $newGame->title = $game['title'];
            $newGame->company = $game['company'];
            $newGame->publishedAt = $game['publishedAt'];
            $newGame->instruction = $game['instruction'];
            $newGame->type = $game['type'];
            $newGame->mobileMode = $game['mobileMode'];
            $newGame->subType = $game['subType'];
            $newGame->md5 = $game['md5'];
            $newGame->description = $game['description'];
            $newGame->width = $game['width'];
            $newGame->save();

    }
}
}
