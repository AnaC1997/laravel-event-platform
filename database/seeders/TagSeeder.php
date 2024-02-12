<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'musica',
                'img'=> 'https://img.freepik.com/free-photo/volumetric-musical-background-with-treble-clef-notes-generative-ai_169016-29576.jpg',
            ],
            [
                'name' => 'cucina',
                'img'=> 'https://media.istockphoto.com/id/1066869028/it/video/gruppo-di-persone-che-mangiano-a-tavola-con-il-cibo.jpg?s=640x640&k=20&c=tX6OOeVFTtG5Sozd64xlZNmnmNGohBp19OOm3LcTuuk=',
            ],
            [
                'name' => 'teatro',
                'img' => 'https://www.digitalavmagazine.com/it/wp-content/uploads/2014/03/Sony-National-Theatre-Live-4K.jpg',

                
            ],
            [
                'name' => 'arte',
                'img' => 'https://www.creativefabrica.com/wp-content/uploads/2023/02/11/4K-Comics-Pop-Art-Street-Background-Graffiti-Art-60871894-1.png',

            ],
            [
                'name' => 'seminario',
                'img' => 'https://www.eventi-fiere.it/blog/wp-content/uploads/sites/3/2019/03/Come-organizzare-un-convegno-2-min.jpg',

            ],
        ];

        foreach($tags as $tag){
            $newTag  = new Tag();
            $newTag->fill($tag);
            $newTag->save();

        }
    }
}
