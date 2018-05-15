<?php
App::uses('Controller', 'Controller');
class AppController extends Controller { 

//	public $helpers = array('Javascript','Common','Session','Html','Form','Ajax','Js' => array('Jquery'));

	var $components = array('Email','Acl','Auth'=> array(
        'loginRedirect' => array(
            'controller' => 'store',
            'action' => 'index'
        ),
        'logoutRedirect' => array(
            'controller' => 'home',
            'action' => 'index'
        )
    ), 'Session','RequestHandler');

	var $uses = array('PermissionModule','Permission','Common','Time');

	function beforeFilter() {

  
   // $this->set('count',$this->Cart->getCount());


		if(strpos($_SERVER['HTTP_HOST'], "www.") !== 0){

			//header("Location: ".SITE_URL_WWW.$_SERVER['REQUEST_URI']);

		}

		

		if($this->name == 'CakeError') {

        	$this->layout = 'error';

    	}

		
		if($this->name == 'CakeError') {
//$this->redirect(SITE_URL.'home/index');
        	//$this->layout = 'error';

    	}
		$this->Auth->actionPath = 'controllers/';

        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');

        $this->Auth->logoutRedirect = array('controller' => 'home', 'action' => 'index');

        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
$this->set('authUser', $this->Auth->user());
        

		$this->set('metakey','Brainbuxa');

		$this->set('metaDescription','Brainbuxa');

		

		$this->check_permission();

        if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
            $this->layout = 'admin';

        } 

    }
	
	
	public function check_permission(){
$this->loadModel('PermissionModule');
$this->loadModel('Permission');

			if($this->is_LoggedIn()) $role = $this->Auth->user('role_id'); else $role = 0;

			$controller = $this->params->params['controller'];

			if($role == 0) return true;

			if($controller == 'ajax') return true;

			

			$action = $this->params->params['action'];

			

			if($action == 'access_denied' || $action == 'admin_syncronize_actions') return true;

			

			

			$moduleId = $this->PermissionModule->find('first',array('conditions'=>array('PermissionModule.controller'=>$controller,'PermissionModule.action'=>$action),'fields'=>'id'));

			//echo "<pre>";var_dump($moduleId); die;

			if(!$moduleId) return true;

			$modulePermission = $this->Permission->find('first',array('conditions'=>array('Permission.module_id'=>$moduleId['PermissionModule']['id'],'Permission.role_id'=>$role),'fields'=>'permission'));

			

			//pr($modulePermission['Permission']); die;

			

			if($modulePermission['Permission']['permission'] == 'Y') return true; else $this->redirect(array('controller'=>'dashboard','action'=>'access_denied'));
	}
public function is_LoggedIn() {

           $logged_in = FALSE;

           if($this->Auth->user()) {

               $logged_in = TRUE;

           }

        	return $logged_in;

       }
	   
	   public function move_images($k='',$path='')
{
	$item=$k;
	$i=1;
	$filename=$item['name'];
	$ext=  end(explode('.', $filename));
	$name = md5(time($filename));
	$rnd=mt_rand();
	$imagename=trim($name.$rnd.$i.'.'.$ext," ");
if(move_uploaded_file($item['tmp_name'],"images/".$path."/".$imagename))
	{ 
		$kk=$imagename;
	}
	$i++;
	return $kk;
}
	   
}
