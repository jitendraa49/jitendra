<?php
class CategoryController extends AppController {
public function admin_index() {
	$this->loadModel('Category');
		$sli= $this->Category->find('all');
			$this->set('category',$sli);
 

	}

	
	public function admin_add() {
		$this->loadModel('Category');

if($this->request->is('post')){
		//pr($this->request->data); die;
		
		$filename=$this->request->data['Category']['image'];
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Category']['image']=$gall;
		if($this->Category->save($this->request->data)){

		$this->Session->setFlash(__('Category  Added Successfully'), 'flash/sucess');

		$this->redirect(array('action' => 'index'));

		}
	}
	}
	
	public function admin_edit($id=null) {
	$this->loadModel('Category');
	$this->Category->id = $id;
	//Image code
	$image=$this->Category->find('first',array('conditions'=>array('Category.id'=>$id)));
	$imageselect=$image['Category']['image'];
	if($this->request->is('post') || $this->request->is('put'))
	{
		// Image code
		$filename=$this->request->data['Category']['image'];
		if(!empty($filename['name'])){
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Category']['image']=$gall;
		$dest="images/banner/";
		$this->request->data['Category']['image']=$gall;
		unlink($dest.$imageselect);
		unlink("img/banner/".$imageselect);
		}
		else{
		$this->request->data['Category']['image']= $imageselect; 
		}  
		
		if($this->Category->save($this->request->data)){
		$this->Session->setFlash(__('The Category is updated successfully'), 'flash/sucess');
		$this->redirect(array('action' => 'index'));
		}	
	}
	else{ 
	$this->request->data = $this->Category->read(null,$id);
	}
	}
	public function admin_delete($id) {
		$this->loadModel('Category');

			$this->Category->id = $id;
		if ($this->Category->delete()) {

			$this->Session->setFlash(__('Category  infomation deleted'), 'Flash/sucess');

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Category  inforamtion was not deleted'), 'Flash/error');

		$this->redirect(array('action' => 'index'));
		
		
		
	}
	public function admin_make_supportiv($sts,$users) 
	{
		$this->Category->query("update cms_category set status='".$sts."' where id=".$users);
		$this->Session->setFlash('Category information updated successfully', 'flash/sucess');
		$this->redirect($this->referer());
	}

	

}