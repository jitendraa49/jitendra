<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>

<div class="maincontent noright">
        	<div class="maincontentinner">
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                <?php echo $this->Form->create('Slider',array('url'=>array('controller'=>'slider','action'=>'add'),'type'=>'file','inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'stdform')); ?>
             
			 <p>
                <label>Hotels</label>
                <span class="field">
                <?php echo $this->Form->input('hotels', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;")); ?></span>
                
                </p>
				
				<p>
                <label>Flights</label>
                <span class="field">
                <?php echo $this->Form->input('flights', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;")); ?></span>
                
                </p>
				<p>
                <label>Buses</label>
                <span class="field">
                <?php echo $this->Form->input('buses', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;")); ?></span>
                
                </p>
				<p>
                <label>Train</label>
                <span class="field">
                <?php echo $this->Form->input('train', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;")); ?></span>
                
                </p>
				

				
				 
       
                
                <p>
                <label>&nbsp;</label>
                <span class="field">
                <?php echo $this->Form->submit('Submit'); ?></span>
                </p>

                <?php echo $this->Form->end();?>   	
                      
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
             