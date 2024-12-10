<?php

namespace App\Controller;

class AccueilController extends AppController
{
    public function index()
    {
        
    }
public function lancerMoteur()
    {
        $output = shell_exec("sudo python /var/www/html/Projet-Stationsolaire/Explo-Techno-Projet/Explo-Techno-projet/webroot/Moteur.py 2>&1");
        return $this->redirect(['controller' => 'Orientationmoteur', 'action' => 'index']);

    }
}