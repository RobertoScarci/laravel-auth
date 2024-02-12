<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
            array(
                'autore' => 'Roberto Scarci',
                'titolo' => 'Boolzapp',
                'contenuto' => 'Creazione interattiva di un modello molto semplice e racchiuso in poco codice che rappresenta un whatsapp in maniera alternativa.',
                'immagine' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'data' => '2023-07-12'
            ),
        );

            foreach ($projects as $project) {
                $newProject = new Project();
                $newProject->title = $project['titolo'];
                $newProject->author = $project['autore'];
                $newProject->post_image = $project['immagine'];
                $newProject->content = $project['contenuto'];
                $newProject->date = $project['data'];
                $newProject->save();
            }
    }
}
