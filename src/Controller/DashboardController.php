<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;


class DashboardController extends AppController
	{
		 public function index()
	    {   
			 $users = TableRegistry::get('Users');   

	        // Start a new query.
	        $query = $users
	            ->find()
	            ->select(['id', 'email'])
	            ;
	        foreach ($query as $user) {
	        	if($user->id==1){
		         //debug($users->find ());
		         //debug($user->email);
		     }
	    	}
	 	}
	     public function view()
	    {	
	    	
	    }
	    public function logout()
        {
	            $this->Flash->success('You are now logged out.');
	            return $this->redirect($this->Auth->logout());
        }

	}

?>