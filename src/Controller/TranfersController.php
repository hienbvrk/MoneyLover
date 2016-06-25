<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tranfers Controller
 *
 * @property \App\Model\Table\TranfersTable $Tranfers
 */
class TranfersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FromWallets', 'ToWallets']
        ];
        $tranfers = $this->paginate($this->Tranfers);

        $this->set(compact('tranfers'));
        $this->set('_serialize', ['tranfers']);
    }

    /**
     * View method
     *
     * @param string|null $id Tranfer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tranfer = $this->Tranfers->get($id, [
            'contain' => ['FromWallets', 'ToWallets']
        ]);

        $this->set('tranfer', $tranfer);
        $this->set('_serialize', ['tranfer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tranfer = $this->Tranfers->newEntity();
        if ($this->request->is('post')) {
            $tranfer = $this->Tranfers->patchEntity($tranfer, $this->request->data);
            if ($this->Tranfers->save($tranfer)) {
                $this->Flash->success(__('The tranfer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tranfer could not be saved. Please, try again.'));
            }
        }
        $fromWallets = $this->Tranfers->FromWallets->find('list', ['limit' => 200]);
        $toWallets = $this->Tranfers->ToWallets->find('list', ['limit' => 200]);
        $this->set(compact('tranfer', 'fromWallets', 'toWallets'));
        $this->set('_serialize', ['tranfer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tranfer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tranfer = $this->Tranfers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tranfer = $this->Tranfers->patchEntity($tranfer, $this->request->data);
            if ($this->Tranfers->save($tranfer)) {
                $this->Flash->success(__('The tranfer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tranfer could not be saved. Please, try again.'));
            }
        }
        $fromWallets = $this->Tranfers->FromWallets->find('list', ['limit' => 200]);
        $toWallets = $this->Tranfers->ToWallets->find('list', ['limit' => 200]);
        $this->set(compact('tranfer', 'fromWallets', 'toWallets'));
        $this->set('_serialize', ['tranfer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tranfer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tranfer = $this->Tranfers->get($id);
        if ($this->Tranfers->delete($tranfer)) {
            $this->Flash->success(__('The tranfer has been deleted.'));
        } else {
            $this->Flash->error(__('The tranfer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
