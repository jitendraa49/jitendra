
<ul class="maintabmenu">
		 <?php  if($this->Session->read("Auth.User.role_id")==1) {?>
		 
		<?php // pr($this->request->params); ?>
		 
   <li><?php echo $this->Html->link('Dashboard', ADMIN_URL.'dashboard'); ?></li>
   <?php //pr($this->request->params); ?>
    <li <?php if($this->request->params['action'] == 'admin_index') echo 'class="current"';?>><?php echo $this->Html->link('service', ADMIN_URL.'service'); ?></li>
    <?php if($this->request->params['action'] == 'admin_edit') {?>
    	<li <?php if($this->request->params['action'] == 'admin_edit') echo 'class="current"';?>><?php echo $this->Html->link('edit Service', ADMIN_URL.'service/edit'); ?></li>
    <?php } else {?>
    	<li <?php if($this->request->params['action'] == 'admin_add') echo 'class="current"';?>><?php echo $this->Html->link('Add Service', ADMIN_URL.'service/add'); ?></li>
		
		
    <?php } ?>
	
	<?php } ?>

   
</ul>
