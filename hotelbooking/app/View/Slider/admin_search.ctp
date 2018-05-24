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