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
        $output = shell_exec("python python ../../../Python/Moteur.py");
        sleep(10);

        return $this->redirect(['controller' => 'Orientationmoteur', 'action' => 'index']);

    }
}
