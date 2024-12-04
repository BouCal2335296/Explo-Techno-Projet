<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Relever Controller
 *
 * @property \App\Model\Table\ReleverTable $Relever
 */
class ReleverController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Relever->find();
        $relever = $this->paginate($query);

        $this->set(compact('relever'));
    }

    /**
     * View method
     *
     * @param string|null $id Relever id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relever = $this->Relever->get($id, contain: []);
        $this->set(compact('relever'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relever = $this->Relever->newEmptyEntity();
        if ($this->request->is('post')) {
            $relever = $this->Relever->patchEntity($relever, $this->request->getData());
            if ($this->Relever->save($relever)) {
                $this->Flash->success(__('The relever has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relever could not be saved. Please, try again.'));
        }
        $this->set(compact('relever'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Relever id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relever = $this->Relever->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relever = $this->Relever->patchEntity($relever, $this->request->getData());
            if ($this->Relever->save($relever)) {
                $this->Flash->success(__('The relever has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relever could not be saved. Please, try again.'));
        }
        $this->set(compact('relever'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Relever id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relever = $this->Relever->get($id);
        if ($this->Relever->delete($relever)) {
            $this->Flash->success(__('The relever has been deleted.'));
        } else {
            $this->Flash->error(__('The relever could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
