
<ul class="maintabmenu">
		 <?php  if($this->Session->read("Auth.User.role_id")==1) {?>
		 
		<?php // pr($this->request->params); ?>
		 
   <li><?php echo $this->Html->link('Profile', ADMIN_URL.'profile'); ?></li>
   <?php //pr($this->request->params); ?>
    <li <?php if($this->request->params['action'] == 'admin_index') echo 'class="current"';?>><?php echo $this->Html->link('complaint', ADMIN_URL.'complaint'); ?></li>
    <?php if($this->request->params['action'] == 'admin_edit') {?>
    	<li <?php if($this->request->params['action'] == 'admin_edit') echo 'class="current"';?>><?php echo $this->Html->link('Edit Service', ADMIN_URL.'service/edit'); ?></li>
    <?php } else {?>
    	<li <?php if($this->request->params['action'] == 'admin_add') echo 'class="current"';?>><?php echo $this->Html->link('Contact Us', ADMIN_URL.'service/contact'); ?></li>
		
		
    <?php } ?>
	
	<?php } ?>

   
</ul>
