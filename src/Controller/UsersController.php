<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use \Cake\Auth\DefaultPasswordHasher;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);

        // Allow users to register and logout
        $this->Auth->allow(['add', 'logout', 'forgotPass', 'active', 'resetPass']);

        $this->set('form_templates', Configure::read('Templates'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Categories', 'Wallets']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('layout_login');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->id = $this->Users->getIdByEmail($this->request->data['email']);
            $user->token = (new DefaultPasswordHasher())->hash($user->email);
            if ($this->Users->save($user)) {
                $email = new Email('default');
                $email->template('registed')
                        ->emailFormat('html')
                        ->to($user->email)
                        ->subject(__('Welcome to Money Lover!'))
                        ->viewVars([
                            'name' => $user->name,
                            'token' => $user->token
                        ])
                        ->send();

                $this->Flash->success(__('The user has been registed. Please check email.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->layout('layout_login');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function active()
    {
        $this->viewBuilder()->layout('layout_login');
        $this->set('success', $this->Users->activeByToken($this->request->query('token')));
    }

    public function forgotPass()
    {
        $this->viewBuilder()->layout('layout_login');

        $user = $this->Users->getActiveUserBy('email', $this->request->data('email'));
        if ($this->request->is('post')) {
            if ($user) {
                $user->token = (new DefaultPasswordHasher())->hash($user->email . time());
                if ($this->Users->save($user)) {
                    $email = new Email('default');
                    $email->template('forgotPass')
                            ->emailFormat('html')
                            ->to($user->email)
                            ->subject(__('Reset password!'))
                            ->viewVars([
                                'name' => $user->name,
                                'token' => $user->token
                            ])
                            ->send();

                    $this->Flash->success(__('Password was reset. Please check email.'));
                    return $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('Email is not exist.'));
            }
        }
        
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function resetPass()
    {
        $this->viewBuilder()->layout('layout_login');
        $user = $this->Users->getActiveUserBy('token', $this->request->query('token'));
        if ($this->request->is('post')) {
            if ($user) {
                $user = $this->Users->patchEntity($user, $this->request->data);
                $user->token = (new DefaultPasswordHasher())->hash($user->email . time());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Password was reset successfully.'));
                    return $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('User is not exist.'));
            }
        }
        
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        if(empty($user)) {
            $this->viewBuilder()->template('reset_pass_fail');
        }
    }

}
