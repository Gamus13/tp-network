<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|| Ce fichier est l'endroit où vous pouvez définir l'ensemble de votre console basée sur Closure
| commandes. Chaque fermeture est liée à une instance de commande permettant à un
| approche simple pour interagir avec les méthodes IO de chaque commande.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
