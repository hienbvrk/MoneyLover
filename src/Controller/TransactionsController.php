<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transactions Controller
 *
 * @property \App\Model\Table\TransactionsTable $Transactions
 */
class TransactionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wallets', 'Categories']
        ];
        $transactions = $this->paginate($this->Transactions);

        $this->set(compact('transactions'));
        $this->set('_serialize', ['transactions']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => ['Wallets', 'Categories']
        ]);

        $this->set('transaction', $transaction);
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaction = $this->Transactions->newEntity();
        if ($this->request->is('post')) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->data);
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
            }
        }
        $wallets = $this->Transactions->Wallets->find('list', ['limit' => 200]);
        $categories = $this->Transactions->Categories->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'wallets', 'categories'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->data);
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
            }
        }
        $wallets = $this->Transactions->Wallets->find('list', ['limit' => 200]);
        $categories = $this->Transactions->Categories->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'wallets', 'categories'));
        $this->set('_serialize', ['transaction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaction = $this->Transactions->get($id);
        if ($this->Transactions->delete($transaction)) {
            $this->Flash->success(__('The transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
