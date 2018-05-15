<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>

<div class="maincontent noright">
        	<div class="maincontentinner">
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                <?php echo $this->Form->create('Slider',array('url'=>array('controller'=>'slider','action'=>'add'),'type'=>'file','inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'stdform')); ?>
             
<section class="contactInfo ng-scope" ng-if="flavour === 'web'">
<span class="width100 fl txtCenter">
<i class="icon-call dib ico30 greyDr"></i>
</span>
<span class="width100 dib padT10 grey">
<span class="localCall">You can also call us at</span>
<span class="localCall">Within India: <a href="tel:18602585858">1860-258-5858</a> / <a href="tel:18002081060">1800-208-1060</a></span>
<span class="outCall">Calling From Abroad: <a href="tel:+919213025552">+91-9213025552</a></span>
</span>
</section>
       
                
                  	
                      
                    
               
             