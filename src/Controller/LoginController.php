<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {

            $val= $this->Flash->error('Your username or password is incorrect.');
           $this->set('abc',$val);
    }
    public function login()
    {
        
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
         $this->Flash->error('Your username or password is incorrect.');
          echo "999999999999";
        }

       

    }
      
        public function beforeFilter(\Cake\Event\Event $event)
            {
                $this->Auth->allow(['add']);
            }

    }