<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventi = [
            [
                'name' => 'Concerto Live',
                'date' => '2024-02-10',
                'available_tickets' => 150,
                'description' => 'Un fantastico concerto dal vivo con artisti internazionali.',
                'img' => 'https://st.ilfattoquotidiano.it/wp-content/uploads/2020/04/14/concerti1200-690x362.jpg',
                'user_id' =>4, 
               
            ],
            [
                'name' => 'Festival Food',
                'date' => '2024-03-15',
                'available_tickets' => 200,
                'description' => 'Un festival gastronomico con le migliori delizie culinarie.',
                'img' => 'https://www.shutterstock.com/shutterstock/videos/1089829103/thumb/4.jpg?ip=x480',
             
            ],
            [
                'name' => 'Conferenza Tech',
                'date' => '2024-04-20',
                'available_tickets' => 100,
                'description' => 'Una conferenza tecnologica con esperti di settore.',
                'img' => 'https://media-assets.wired.it/photos/6556714bbcbcfdf67854c8ab/16:9/w_1280,c_limit/web%20summit%20finale.jpg',
                'user_id' =>3, 
            ],
            [
                'name' => 'Mostra d\'Arte',
                'date' => '2024-05-25',
                'available_tickets' => 120,
                'description' => 'Una mostra d\'arte con opere di artisti emergenti e affermati.',
                'img' => 'https://www.artribune.com/wp-content/uploads/2022/04/1-Pde_PIRELLI.jpg',
                'user_id' =>2, 
            ],
            [
                'name' => 'Seminario Educativo',
                'date' => '2024-06-30',
                'available_tickets' => 80,
                'description' => 'Un seminario educativo su temi attuali e importanti.',
                'img' => 'https://asvis.it/public/asvis2/images/Notizie_2023/PattoEdu1Cov.jpeg',
                'user_id' =>2, 
                
                
            ],
            [
                'name' => 'Spettacolo Teatrale',
                'date' => '2024-07-05',
                'available_tickets' => 160,
                'description' => 'Un emozionante spettacolo teatrale con una storia coinvolgente.',
                'img' => 'https://media.istockphoto.com/id/1288910371/it/video/scatto-cinematografico-del-teatro-classico-vuoto-con-tende-di-velluto-rosso-che-aprono-il.jpg?s=640x640&k=20&c=sgE8NWHEsgZFWr-haOzCBjCjLAHgH02G6c3szUnnTzY=',
                'user_id' =>1, 
                
            ],
        ];
        foreach ($eventi as $evento) {
            $NewEvento = new Event();
            $NewEvento->fill($evento);
            $NewEvento->save(); 

        }
    }
}
