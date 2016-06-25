<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CommonSettings Controller
 *
 * @property \App\Model\Table\CommonSettingsTable $CommonSettings
 */
class CommonSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $commonSettings = $this->paginate($this->CommonSettings);

        $this->set(compact('commonSettings'));
        $this->set('_serialize', ['commonSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Common Setting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commonSetting = $this->CommonSettings->get($id, [
            'contain' => []
        ]);

        $this->set('commonSetting', $commonSetting);
        $this->set('_serialize', ['commonSetting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commonSetting = $this->CommonSettings->newEntity();
        if ($this->request->is('post')) {
            $commonSetting = $this->CommonSettings->patchEntity($commonSetting, $this->request->data);
            if ($this->CommonSettings->save($commonSetting)) {
                $this->Flash->success(__('The common setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The common setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commonSetting'));
        $this->set('_serialize', ['commonSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Common Setting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commonSetting = $this->CommonSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commonSetting = $this->CommonSettings->patchEntity($commonSetting, $this->request->data);
            if ($this->CommonSettings->save($commonSetting)) {
                $this->Flash->success(__('The common setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The common setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commonSetting'));
        $this->set('_serialize', ['commonSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Common Setting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commonSetting = $this->CommonSettings->get($id);
        if ($this->CommonSettings->delete($commonSetting)) {
            $this->Flash->success(__('The common setting has been deleted.'));
        } else {
            $this->Flash->error(__('The common setting could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
