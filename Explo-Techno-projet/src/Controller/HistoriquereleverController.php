<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Historiquerelever Controller
 *
 * @property \App\Model\Table\HistoriquereleverTable $Historiquerelever
 */
class HistoriquereleverController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->historiqueRelever->find();
        $historiquerelever = $this->paginate($query);

        $this->set(compact('historiquerelever'));
    }

    /**
     * View method
     *
     * @param string|null $id Historiquerelever id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historiquerelever = $this->Historiquerelever->get($id, contain: []);
        $this->set(compact('historiquerelever'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historiquerelever = $this->Historiquerelever->newEmptyEntity();
        if ($this->request->is('post')) {
            $historiquerelever = $this->Historiquerelever->patchEntity($historiquerelever, $this->request->getData());
            if ($this->Historiquerelever->save($historiquerelever)) {
                $this->Flash->success(__('The historiquerelever has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historiquerelever could not be saved. Please, try again.'));
        }
        $this->set(compact('historiquerelever'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Historiquerelever id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historiquerelever = $this->Historiquerelever->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historiquerelever = $this->Historiquerelever->patchEntity($historiquerelever, $this->request->getData());
            if ($this->Historiquerelever->save($historiquerelever)) {
                $this->Flash->success(__('The historiquerelever has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historiquerelever could not be saved. Please, try again.'));
        }
        $this->set(compact('historiquerelever'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Historiquerelever id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historiquerelever = $this->Historiquerelever->get($id);
        if ($this->Historiquerelever->delete($historiquerelever)) {
            $this->Flash->success(__('The historiquerelever has been deleted.'));
        } else {
            $this->Flash->error(__('The historiquerelever could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
