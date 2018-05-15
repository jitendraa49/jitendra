<aside class="offcnvas_sidebar"><div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
		   <?php $controller = (!empty($this->params->params['controller'])) ? strtolower($this->params->params['controller']):'' ?>
                   <div class="inner_leftbar">
                   <div class="inner_leftcontent">
                    <div class="admin_user"><i class="fa fa-user fa-2x"></i>
                    <a href="" class="userinfo">
                        <strong><?php echo ucwords($this->Session->read('Auth.User.username')); ?></strong>
                    </a>
                  <span class="wlcm">Welcome</span>
                    </div>
                    <ul class="nav user-acnt visible-xs">
                    <li><a href="<?php echo ADMIN_URL?>users/current"><i class="fa fa-user fa-lg"></i> My Account</a></li>
                    <li><a href="<?php echo ADMIN_URL?>users/current_edit/<?php echo $this->Session->read('Auth.User.id')?>"><i class="fa fa-cog fa-lg"></i> Account Settings</a></li>
                            <li><a href="#"><i class="fa fa-eraser fa-lg"></i> Clear Cache</a></li>
                            <li><a href="#"><i class="fa fa-envelope fa-lg"></i> Message</a></li>
                    </ul>
                    
 <ul class="nav navbar-nav">
<li <?php if($controller == 'home' || $controller =='') echo 'class="current"'; ?> ><?php echo $this->Html->link('<span>Dashboard</span>', ADMIN_URL.'dashboard', array('class' => 'dashboard','escape' => false)); ?></li>
                    
  <li><?php echo $this->Html->link('<span>Slider Manager</span>', ADMIN_URL.'slider', array('class' => 'slider','escape' => false)); ?></li>
 <!-- <li><?php //echo $this->Html->link('<span>StudentDetails Manager</span>', ADMIN_URL.'studentdetails', array('class' => 'student','escape' => false)); ?></li>-->
 
 <li><?php echo $this->Html->link('<span>Service Manager</span>', ADMIN_URL.'service', array('class' => 'service','escape' => false)); ?></li>
 <!-- <li><?php //echo $this->Html->link('<span>StudentDetails Manager</span>', ADMIN_URL.'studentdetails', array('class' => 'student','escape' => false)); ?></li>-->
 
 <li><?php echo $this->Html->link('<span>Category Manager</span>', ADMIN_URL.'category', array('class' => 'category','escape' => false)); ?></li>
 <!-- <li><?php //echo $this->Html->link('<span>StudentDetails Manager</span>', ADMIN_URL.'studentdetails', array('class' => 'student','escape' => false)); ?></li>-->
 
 <li><?php echo $this->Html->link('<span>Blog Manager</span>', ADMIN_URL.'blog', array('class' => 'blog','escape' => false)); ?></li>
 <!-- <li><?php //echo $this->Html->link('<span>StudentDetails Manager</span>', ADMIN_URL.'studentdetails', array('class' => 'student','escape' => false)); ?></li>-->
 
  <li><?php echo $this->Html->link('<span>Testimonial Manager</span>', ADMIN_URL.'testimonial', array('class' => 'testimonial','escape' => false)); ?></li>
 <!-- <li><?php //echo $this->Html->link('<span>StudentDetails Manager</span>', ADMIN_URL.'studentdetails', array('class' => 'student','escape' => false)); ?></li>-->
 
 
	</li>
</ul>

                    </div>
                    </div>
                    </aside>
       



