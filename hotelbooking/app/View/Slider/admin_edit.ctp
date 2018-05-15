<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>

<div class="maincontent noright">
        	<div class="maincontentinner">
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                <?php echo $this->Form->create('Slider',array('url'=>array('controller'=>'slider','action'=>'edit'),'type'=>'file','inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'stdform')); ?>
             
			 <p>
                <label>Title</label>
                <span class="field">
                <?php echo $this->Form->input('name', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;",'required'=>true)); ?></span>
                
                </p>
				
				<p>
                <label>Image</label>
                <span class="field">
                <?php echo $this->Form->input('image', array('class' => 'longinput','style'=>"margin: 6px 7px 9px 0; width: 30%;",'required'=>true,'type'=>'file')); ?></span>
                <img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $this->request->data['Slider']['image']; ?>" height="100px" width="100px">
                </p>
				<?php //pr($this->request->data); ?>
       
			
				
                
                <p>
                <label>&nbsp;</label>
                <span class="field">
                <?php echo $this->Form->submit('Submit'); ?></span>
                </p>

                <?php echo $this->Form->end();?>   	
                      
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
             