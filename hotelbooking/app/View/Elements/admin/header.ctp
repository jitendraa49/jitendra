
<?php /*?>	<h1>             <?php   if($this->Session->read("Auth.User.id"))
			{
				    if($this->Session->read("Auth.User.role_id")==1){
				//$this->layout = 'dashboard';
				    }else{
						echo "You are not authorized";
						exit;
				    }
			}	
           ?> </h1><?php */?>
        
                    <ul class="nav navbar-nav navbar-right">
                       <li class="hidden-xs"><a href="<?php echo ADMIN_URL?>users/current" title="My Account"><i class="fa fa-user fa-lg"></i></a></li>
                       <li class="hidden-xs"><a href="<?php echo ADMIN_URL?>users/current_edit/<?php echo $this->Session->read('Auth.User.id')?>" title="Account Settings"><i class="fa fa-cog fa-lg"></i></a></li>
                       <li class="hidden-xs"><a href="#" title="Clear Cache"><i class="fa fa-eraser fa-lg"></i></a></li>
                      
                       <li class="hidden-xs"><a href="#" title="Message"><i class="fa fa-envelope fa-lg"></i></a></li>
                       <li><a href="<?php echo ADMIN_URL; ?>users/logout/" title="Logout"><i class="fa fa-power-off fa-lg"></i></a></li>
                    </ul>
                
<!-- Modal -->

