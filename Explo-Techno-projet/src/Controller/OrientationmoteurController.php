<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orientationmoteur Controller
 *
 * @property \App\Model\Table\OrientationmoteurTable $Orientationmoteur
 */
class OrientationmoteurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Orientationmoteur->find();
        $orientationmoteur = $this->paginate($query);

        $this->set(compact('orientationmoteur'));
    }

    public function lancerMoteur()
    {
        $output = shell_exec("sudo python /var/www/html/Projet-Stationsolaire/Explo-Techno-Projet/Explo-Techno-projet/webroot/Moteur.py 2>&1");
        return $this->redirect(['controller' => 'Orientationmoteur', 'action' => 'index']);

    }
}
