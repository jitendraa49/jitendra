	<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>
 	  
	    <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                
                <?php echo $this->Session->flash(); ?>
                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Blog Manager</span></h2>
                </div><!--contenttitle-->
                <div class="tableoptions">
                
				<br>

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
                           
                           <th  style="width:100px;"  class="head0 "> Title</th>
						   <th  style="width:100px;"  class="head0 "> Date</th>
						   <th  style="width:100px;"  class="head0 "> Description</th>
							 <th  style="width:100px;"  class="head0">Image</th>
						  	<th  style="width:100px;"  class="head0 "> Action </th>

                        </tr>
                    </thead>
                    
                    <tbody>
					
                    <?php if(count($blog)>0){ //pr($destination);?>
                       <?php   $i=1; foreach($blog as $gdfg=>$value) { 
					  // pr($value);
						?>
                        <tr class="gradeX">
 <td><?php echo $i; ?></td>

 <td><?php echo $value['Blog']['title']; ?></td>
 <td><?php echo $value['Blog']['date']; ?></td>
 <td><?php echo $value['Blog']['description']; ?></td>
<td><img src="<?php echo SITE_URL; ?>/images/banner/<?php echo $value['Blog']['image']; ?>" height="100px" width="100px"></td>


   <td> <?php echo $this->Html->link(__(''), array('action' => 'edit', $value['Blog']['id']), array('class'=>'btn btn4 btn_edit_a','title'=>'Edit')); ?>
<?php echo $this->Html->link(__(''), array('action' => 'delete', $value['Blog']['id']), array('class'=>'btn btn4 btn_trash_a','title'=>'Delete'), __('', $value['Blog']['id'])); ?>

  <?php if($value['Blog']['status']== 'Y') { ?>
									 <a href="<?php echo ADMIN_URL;?>Blog/make_supportiv/N/<?php echo $value['Blog']['id'];?>" style="position: relative;
top: 0px;"> <img src="<?php echo $this->webroot; ?>images/active.png"  style=" padding: 0px;"  class="btn btn4 btn_edit_a" title="Inactive">
									   </a>


									 <?php  } else { ?>
									 <a href="<?php echo ADMIN_URL;?>Blog/make_supportiv/Y/<?php echo $value['Blog']['id'];?>" style="position: relative;
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
            
            
