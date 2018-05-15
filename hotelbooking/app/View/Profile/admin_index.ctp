	<script src="<?php echo $this->webroot; ?>js/admin/all_home.js"></script>
 	  
	    <div class="maincontent noright">
        	<div class="maincontentinner">
            	
            	<?php include_once('admin_menus.ctp'); ?>
                <!--maintabmenu-->
                
                <div class="content">
                
                <?php echo $this->Session->flash(); ?>
                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>User Manager</span></h2>
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
                        	

                           <th  style="width:100px;"  class="head0">name</th>
                           <th  style="width:100px;"  class="head0 "> username </th>
						                              

							<!-- <th  style="width:100px;"  class="head0">Image</th>-->
							 <th  style="width:100px;"  class="head0">booking</th>
									 
							 <th  style="width:100px;"  class="head0">comments</th>
							 
						  	<th  style="width:100px;"  class="head0 "> Action </th>

                        </tr>
                    </thead>
                    
                    <body>
                    <?php if(count($destination)>0){ //pr($destination);?>
                       <?php   $i=1; foreach($destination as $gdfg=>$value) { 
					  // pr($value);
						?>
                        <tr class="gradeX">
 <td><?php echo $i; ?></td>
<td><?php echo $value['Student']['name']; ?></td>
<td><?php echo $value['Student']['username']; ?></td>
<td><?php echo $value['Student']['booking']; ?></td>
<td><?php echo $value['Student']['comments']; ?></td>

<td> 

    <?php echo $this->Html->link(__(''), array('action' => 'edit', $value['Student']['id']), array('class'=>'btn btn4 btn_edit_a','title'=>'Edit')); ?>
<?php echo $this->Html->link(__(''), array('action' => 'delete', $value['Student']['id']), array('class'=>'btn btn4 btn_trash_a','title'=>'Delete'), __('test', $value['Student']['id'])); ?>

  <?php if($value['Student']['status']== 'Y') { ?>
									 <a href="<?php echo ADMIN_URL;?>Student/make_supportiv/N/<?php echo $value['Student']['id'];?>" style="position: relative;
top: 0px;"> <img src="<?php echo $this->webroot; ?>images/active.png"  style=" padding: 0px;"  class="btn btn4 btn_edit_a" title="Inactive">
									   </a>


									 <?php  } else { ?>
									 <a href="<?php echo ADMIN_URL;?>Student/make_supportiv/Y/<?php echo $value['Student']['id'];?>" style="position: relative;
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
            
            
