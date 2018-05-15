<?php
class HomeController extends AppController {
	function beforeFilter() {

		parent::beforeFilter();

		$this->Auth->allow('index');

		

	}
	
	
	public function index() {
	$this->loadModel('Slider');
		$sli= $this->Slider->find('all',array('conditions'=>array('Slider.status'=>'Y')));
	
			$this->set('slider',$sli);
			
			
	$this->loadModel('Blog');
		$sli= $this->Blog->find('all',array('conditions'=>array('Blog.status'=>'Y')));
	
			$this->set('blog',$sli);
			
			
	$this->loadModel('Category');
		$sli= $this->Category->find('all',array('conditions'=>array('Category.status'=>'Y')));
	
			$this->set('category',$sli);

$this->loadModel('Testimonial');
		$sli= $this->Testimonial->find('all',array('conditions'=>array('Testimonial.status'=>'Y')));
	
			$this->set('testimonial',$sli);		
				
	
	
	}
public function contact() {

	}
}