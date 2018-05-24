<?php
class UsersController extends AppController {
	
	
	function beforeFilter() {

		parent::beforeFilter();
	parent::beforeFilter();

		$this->Auth->authenticate = array( 

                                        AuthComponent::ALL => array('userModel' => 'User', 'scope' => array("User.status" => 'Y')),

                                        'Form'

										);

		Security::setHash('md5');
		$this->Auth->allow('admin_login');

		

	}
	
	public function admin_login() {
		if($this->Session->read("Auth.User.id"))
            {
                    $this->redirect(array('controller'=>'dashboard'));
            }else{
            $this->layout = 'login';
            }

				if ($this->request->is('post')) {
//pr($this->request->data); die;
            if ($this->Auth->login()) {
			$redirectUrl = ADMIN_URL."dashboard";
     $userid= $this->Session->read("Auth.User.id"); 
 if($this->Session->read("Auth.User.role_id")==1 || $this->Session->read("Auth.User.role_id")==2){
				  $this->redirect($redirectUrl);
				    }else{
				    }
            } else {
                $this->Session->setFlash('Username or password is incorrect', 'flash/loginerror', array(), 'auth');
                $this->redirect($this->Auth->loginAction);

            }
			
 }
 
			
			
			
			
			
			
			

	}
		


}