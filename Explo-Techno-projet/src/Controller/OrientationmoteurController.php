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

    /**
     * View method
     *
     * @param string|null $id Orientationmoteur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orientationmoteur = $this->Orientationmoteur->get($id, contain: []);
        $this->set(compact('orientationmoteur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orientationmoteur = $this->Orientationmoteur->newEmptyEntity();
        if ($this->request->is('post')) {
            $orientationmoteur = $this->Orientationmoteur->patchEntity($orientationmoteur, $this->request->getData());
            if ($this->Orientationmoteur->save($orientationmoteur)) {
                $this->Flash->success(__('The orientationmoteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orientationmoteur could not be saved. Please, try again.'));
        }
        $this->set(compact('orientationmoteur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orientationmoteur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orientationmoteur = $this->Orientationmoteur->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orientationmoteur = $this->Orientationmoteur->patchEntity($orientationmoteur, $this->request->getData());
            if ($this->Orientationmoteur->save($orientationmoteur)) {
                $this->Flash->success(__('The orientationmoteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orientationmoteur could not be saved. Please, try again.'));
        }
        $this->set(compact('orientationmoteur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orientationmoteur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orientationmoteur = $this->Orientationmoteur->get($id);
        if ($this->Orientationmoteur->delete($orientationmoteur)) {
            $this->Flash->success(__('The orientationmoteur has been deleted.'));
        } else {
            $this->Flash->error(__('The orientationmoteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
