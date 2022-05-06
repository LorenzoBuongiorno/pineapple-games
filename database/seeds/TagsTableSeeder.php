<?php

use App\Tags;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['platform',
        '2-players',
        'bubble',
        'fun',
        'kids',
        'shooter',
        'solitaire',
        'classic',
        'cards',
        'mahjong',
        'puzzle',
        'bike',
        'motorbike',
        'arcade',
            ];

        foreach ($tags as $tag) {
            $newTag = new Tags();
            $newTag->tags = $tag;
            $newTag->save();
        }
    }
}
