
<ul class="maintabmenu">
		 <?php  if($this->Session->read("Auth.User.role_id")==1) {?>
		 
		<?php // pr($this->request->params); ?>
		 
   <li><?php echo $this->Html->link('Dashboard', ADMIN_URL.'dashboard'); ?></li>
   <?php //pr($this->request->params); ?>
    <li <?php if($this->request->params['action'] == 'admin_index') echo 'class="current"';?>><?php echo $this->Html->link('testimonial', ADMIN_URL.'testimonial'); ?></li>
    <?php if($this->request->params['action'] == 'admin_edit') {?>
    	<li <?php if($this->request->params['action'] == 'admin_edit') echo 'class="current"';?>><?php echo $this->Html->link('edit Testimonial', ADMIN_URL.'testimonial/edit'); ?></li>
    <?php } else {?>
    	<li <?php if($this->request->params['action'] == 'admin_add') echo 'class="current"';?>><?php echo $this->Html->link('Add testimonial', ADMIN_URL.'testimonial/add'); ?></li>
		
		
    <?php } ?>
	
	<?php } ?>

   
</ul>
