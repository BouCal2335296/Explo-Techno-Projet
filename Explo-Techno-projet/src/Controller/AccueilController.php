<?php

namespace App\Controller;

class AccueilController extends AppController
{
    public function index()
    {
        
    }

    public function lancerScript()
    {
        // Chemin complet vers le script Python
        $scriptPath = '/var/www/html/Projet-Stationsolaire/Explo-Techno-Projet/Python/Moteur.py';

        // Exécutez le script en ligne de commande
        $output = shell_exec("/usr/bin/python3" . escapeshellarg($scriptPath) . " 2>&1");

        // Affichez ou retournez le résultat
        $this->set('output', $output);
    }
}