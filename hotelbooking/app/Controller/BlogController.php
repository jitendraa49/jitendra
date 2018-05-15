<?php
class BlogController extends AppController {
	
	public function index() {

	}

		public function admin_index() {
				$this->loadModel('Blog');
		$sli= $this->Blog->find('all');
			$this->set('blog',$sli);

	

	}
	


	public function admin_add() {
		if($this->request->is('post')){
		//pr($this->request->data); die;
		
		$filename=$this->request->data['Blog']['image'];
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Blog']['image']=$gall;
		if($this->Blog->save($this->request->data)){

		$this->Session->setFlash(__('Blog  Added Successfully'), 'flash/sucess');

		$this->redirect(array('action' => 'index'));

		}
	}
	}
	
	public function admin_edit($id=null) {
	$this->loadModel('Blog');
	$this->Blog->id = $id;
	//Image code
	$image=$this->Blog->find('first',array('conditions'=>array('Blog.id'=>$id)));
	$imageselect=$image['B']['image'];
	if($this->request->is('post') || $this->request->is('put'))
	{
		// Image code
		$filename=$this->request->data['Blog']['image'];
		if(!empty($filename['name'])){
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Blog']['image']=$gall;
		$dest="images/banner/";
		$this->request->data['Blog']['image']=$gall;
		unlink($dest.$imageselect);
		unlink("img/banner/".$imageselect);
		}
		else{
		$this->request->data['Blog']['image']= $imageselect; 
		}  
		
		if($this->Blog->save($this->request->data)){
		$this->Session->setFlash(__('The Blog is updated successfully'), 'flash/sucess');
		$this->redirect(array('action' => 'index'));
		}	
	}
	else{ 
	$this->request->data = $this->Blog->read(null,$id);
	}
	}
	public function admin_delete($id) {
		$this->loadModel('Blog');

			$this->Blog->id = $id;
		if ($this->Blog->delete()) {

			$this->Session->setFlash(__('Blog  infomation deleted'), 'Flash/sucess');

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Blog  inforamtion was not deleted'), 'Flash/error');

		$this->redirect(array('action' => 'index'));
		
		
		
	}
	public function admin_make_supportiv($sts,$users) 
	{
		$this->Blog->query("update cms_blog set status='".$sts."' where id=".$users);
		$this->Session->setFlash('Blog information updated successfully', 'flash/sucess');
		$this->redirect($this->referer());
	}


	

		
		
		
		
		
		
	

	


}