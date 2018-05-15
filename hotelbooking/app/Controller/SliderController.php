<?php
class SliderController extends AppController {
public function admin_index() {
	$this->loadModel('Slider');
		$sli= $this->Slider->find('all');
			$this->set('slider',$sli);
 

	}

	
	public function admin_add() {
		$this->loadModel('Slider');

if($this->request->is('post')){
		//pr($this->request->data); die;
		
		$filename=$this->request->data['Slider']['image'];
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Slider']['image']=$gall;
		if($this->Slider->save($this->request->data)){

		$this->Session->setFlash(__('Slider  Added Successfully'), 'flash/sucess');

		$this->redirect(array('action' => 'index'));

		}
	}
	}
	
	public function admin_edit($id=null) {
	$this->loadModel('Slider');
	$this->Slider->id = $id;
	//Image code
	$image=$this->Slider->find('first',array('conditions'=>array('Slider.id'=>$id)));
	$imageselect=$image['Slider']['image'];
	if($this->request->is('post') || $this->request->is('put'))
	{
		// Image code
		$filename=$this->request->data['Slider']['image'];
		if(!empty($filename['name'])){
		$gall=$this->move_images($filename,'banner');
		$this->request->data['Slider']['image']=$gall;
		$dest="images/banner/";
		$this->request->data['Slider']['image']=$gall;
		unlink($dest.$imageselect);
		unlink("img/banner/".$imageselect);
		}
		else{
		$this->request->data['Slider']['image']= $imageselect; 
		}  
		
		if($this->Slider->save($this->request->data)){
		$this->Session->setFlash(__('The Slider is updated successfully'), 'flash/sucess');
		$this->redirect(array('action' => 'index'));
		}	
	}
	else{ 
	$this->request->data = $this->Slider->read(null,$id);
	}
	}
	public function admin_delete($id) {
		$this->loadModel('Slider');

			$this->Slider->id = $id;
		if ($this->Slider->delete()) {

			$this->Session->setFlash(__('Slider  infomation deleted'), 'Flash/sucess');

			$this->redirect(array('action' => 'index'));

		}

		$this->Session->setFlash(__('Slider  inforamtion was not deleted'), 'Flash/error');

		$this->redirect(array('action' => 'index'));
		
		
		
	}
	public function admin_make_supportiv($sts,$users) 
	{
		$this->Slider->query("update cms_sliders set status='".$sts."' where id=".$users);
		$this->Session->setFlash('Slider information updated successfully', 'flash/sucess');
		$this->redirect($this->referer());
	}

	

}