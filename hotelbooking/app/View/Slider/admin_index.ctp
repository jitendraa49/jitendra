	<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>
 	    <?php echo $this->Form->create('Category',array('url' => array('controller' => 'slider', 'action' => 'categoryexport'), 'inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'stdform')); ?> 
	    <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                
                <?php echo $this->Session->flash(); ?>
                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Slider Manager</span></h2>
                </div><!--contenttitle-->
                <div class="tableoptions">
                 <div class="section_leftboxes">
   <input type="submit" class="radius3" id="search" name="supportive" value="Export to CSV" >
   
       </div>
       <div class="section_rightbox">    
            <?php echo $this->Form->end();?>
            
        </div>
				<br>
				<?php
$data = $this->Js->get('#SearchproAdminIndexForm')->serializeForm(array('isForm' => true, 'inline' => true));
$this->Js->get('#SearchproAdminIndexForm')->event('keyup',
$this->Js->request(array('action' => 'search', 'controller' => 'slider'),
array(
'update' => '#prosrrc',
'data' => $data,
'async' => true,   
'dataExpression'=>true,
'method' => 'POST'
)));
echo $this->Js->writeBuffer();
?>

				
<?php  echo $this->Form->create('Searchpro',array('inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'stdform'));?>
		
        <?php echo $this->Form->input('name', array('class' => 'smallselect','type'=>'text','placeholder'=>'Name','style'=>'margin: 6px 7px 9px 0; width: 20%;'));
?>
   <?php echo $this->Form->input('desc', array('class' => 'smallselect','type'=>'text','placeholder'=>'dsec','style'=>'margin: 6px 7px 9px 0; width: 20%;'));
?>
        
        <?php echo $this->Form->end(); ?>
               </div><!--tableoptions-->

                <div class="dataTables_wrapper" id="dyntable_wrapper">	
				                <div id='prosrrc'>

 <table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb" id="dyntablzze">
                
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                        	
                           <th  style="width:100px;"  class="head0">S.no</th>
                           <th  style="width:100px;"  class="head0">Title</th>
                           <th  style="width:100px;"  class="head0 "> Image</th>
						                              
							 
						  	<th  style="width:100px;"  class="head0 "> Action </th>

                        </tr>
                    </thead>
                    
                    <tbody>
					
                    <?php if(count($slider)>0){ //pr($destination);?>
                       <?php   $i=1; foreach($slider as $gdfg=>$value) { 
					  // pr($value);
						?>
                        <tr class="gradeX">
 <td><?php echo $i; ?></td>
<td><?php echo $value['Slider']['name']; ?></td>
<td><img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $value['Slider']['image']; ?>" height="100px" width="100px"></td>


   <td> <?php echo $this->Html->link(__(''), array('action' => 'edit', $value['Slider']['id']), array('class'=>'btn btn4 btn_edit_a','title'=>'Edit')); ?>
<?php echo $this->Html->link(__(''), array('action' => 'delete', $value['Slider']['id']), array('class'=>'btn btn4 btn_trash_a','title'=>'Delete'), __('', $value['Slider']['id'])); ?>

  <?php if($value['Slider']['status']== 'Y') { ?>
									 <a href="<?php echo ADMIN_URL;?>slider/make_supportiv/N/<?php echo $value['Slider']['id'];?>" style="position: relative;
top: 0px;"> <img src="<?php echo $this->webroot; ?>images/active.png"  style=" padding: 0px;"  class="btn btn4 btn_edit_a" title="Inactive">
									   </a>


									 <?php  } else { ?>
									 <a href="<?php echo ADMIN_URL;?>Slider/make_supportiv/Y/<?php echo $value['Slider']['id'];?>" style="position: relative;
top: 0px;">
									<img src="<?php echo $this->webroot; ?>images/inactive.png" style=" padding: 0px;"  class="btn btn4 btn_edit_a" title="Active">
									</a>
									 <?php  } ?>



</td>
 
 </tr>
                    <?php $i++;	 } ?>
                    <?php } else{  ?>    
                    <tr><td colspan="7" align="center">No Meta Available</td>
                    
                    
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
                </div>
               
                <?php //echo $this->element('admin/pagination'); ?>
                                </div>

               
                <br clear="all" />
                    
             </div>  <!--content-->
                
            </div><!--maincontentinner-->
            <?php echo $this->Form->end();?>
            
            
