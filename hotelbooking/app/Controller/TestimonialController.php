<?php
class TestimonialController extends AppController {
	
	public function index() {

	}

		public function admin_index() {
				$this->loadModel('Testimonial');
		$sli= $this->Testimonial->find('all');
			$this->set('testimonial',$sli);

	

	}
	


	public function admin_add() {
		if($this->request->is('post')){
		//pr($this->request->data); die;
		
		$filename=$this->request->data['Testimonial']['image'];
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Testimonial']['image']=$gall;
		if($this->Testimonial->save($this->request->data)){

		$this->Session->setFlash(__('Testimonial  Added Successfully'), 'flash/sucess');

		$this->redirect(array('action' => 'index'));

		}
	}
	}
	
	public function admin_edit($id=null) {
	$this->loadModel('Testimonial');
	$this->Testimonial->id = $id;
	//Image code
	$image=$this->Testimonial->find('first',array('conditions'=>array('Testimonial.id'=>$id)));
	$imageselect=$image['B']['image'];
	if($this->request->is('post') || $this->request->is('put'))
	{
		// Image code
		$filename=$this->request->data['Testimonial']['image'];
		if(!empty($filename['name'])){
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Testimonial']['image']=$gall;
		$dest="images/banner/";
		$this->request->data['Testimonial']['image']=$gall;
		unlink($dest.$imageselect);
		unlink("img/banner/".$imageselect);
		}
		else{
		$this->request->data['Testimonial']['image']= $imageselect; 
		}  
		
		if($this->Testimonial->save($this->request->data)){
		$this->Session->setFlash(__('The Testimonial is updated successfully'), 'flash/sucess');
		$this->redirect(array('action' => 'index'));
		}	
	}
	else{ 
	$this->request->data = $this->Testimonial->read(null,$id);
	}
	}
	public function admin_delete($id) {
		$this->loadModel('Testimonial');

			$this->Testimonial->id = $id;
		if ($this->Testimonial->delete()) {

			$this->Session->setFlash(__('Testimonial  infomation deleted'), 'Flash/sucess');

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Testimonial  inforamtion was not deleted'), 'Flash/error');

		$this->redirect(array('action' => 'index'));
		
		
		
	}
	public function admin_make_supportiv($sts,$users) 
	{
		$this->Testimonial->query("update cms_testimonial set status='".$sts."' where id=".$users);
		$this->Session->setFlash('Blog information updated successfully', 'flash/sucess');
		$this->redirect($this->referer());
	}


	

		
		
		
		
		
		
	

	


}