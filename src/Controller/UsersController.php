<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Log\Log;
use Cake\Network\Request;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {

        $this->set('users', $this->paginate($this->Users)); //echo $user->email;exit;
        $this->set('_serialize', ['users']); 
                    $data = [
                'color' => 'pink',
                'type' => 'sugar',
                'base_price' => 23.95
            ];

            // Make $color, $type, and $base_price
            // available to the view:

            $this->set($data);

            $this->request->params['pass'];
        }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Bookmarks']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
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
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
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
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
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
    // In src/Controller/UsersController.php

    public function login()
    {
      
        if ($this->request->is('post')) { 
           // preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['email']);
              //vald email

            if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL)) 
            {
                    $this->Flash->error('Your Email is incorrect.');
                    return $this->redirect(['action' => 'login']);
                    
            }
            //valid password
            if (!(strlen( $_POST['password']) < 3)) {
                    $this->Flash->error('Your password is incorrect.');
                    return $this->redirect(['action' => 'login']);
            
            }

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                //var_dump( $this->redirect($this->Auth->redirectUrl()));exit;
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
           
        }
    }
    public function logout()
        {
            $this->Flash->success('You are now logged out.');
            return $this->redirect($this->Auth->logout());
        }
        
    public function beforeFilter(\Cake\Event\Event $event)
        {
            $this->Auth->allow(['add']);
        }
}
