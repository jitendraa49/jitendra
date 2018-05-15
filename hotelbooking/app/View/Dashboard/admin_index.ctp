<?php /*?><link href="<?php echo $this->webroot; ?>css/admin/StyleSheet.css" rel="stylesheet" type="text/css"><?php */?>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/canvasjs.min.js"></script>

 <style>
.back span{
	color:white !important;
	
}
.back .group,.back a{
	color:white !important;
}
</style>
<script type="text/javascript">
window.onload = function () {
	  CanvasJS.addColorSet("blue",
                [//colorSet Array
                "#2d95e3"              
                ]);
//monthlysales
	var chart = new CanvasJS.Chart("jobpost",
	{
		animationEnabled: true,
			height:270,
		width:673,
		zoomEnabled:false,
		colorSet: "blue",
		title:{
			text: "jobpost:This Year",
			fontColor: "#000",
        	fontSize: 14,
        	padding: 10,
        	fontWeight: "600",
			horizontalAlign: "left",
			fontFamily: "'Open Sans', sans-serif"
		},
		axisY: {title:"Donation",
			labelFontSize: 12,
			labelFontColor: "#000",
			valueFormatString:  "#,##,##0.##",
			labelFontFamily:"'Open Sans', sans-serif",
			maximum: 100,
			gridThickness: 1,
			lineThickness: 1,
			tickThickness: 1,
			interval: 10
		},
		axisX: {title:"Duration",
			//valueFormatString: "MMM-YYYY",
			labelFontSize: 12,
			labelFontFamily:"'Open Sans', sans-serif",
			lineThickness: 1,
			labelFontColor: "#000",
			
			interval:1,
		},
		data: [
		{
			type: "column",
			dataPoints: <?php echo $monthlyojana2; ?>
		}
		]
	});

	chart.render();

	
}
</script>
<div class="maincontent">
<!-- START OF FLIP BOXES -->
<section class="flipboxes">
  <ul class="cellgrid row">
    <li>
      <div class="flipbox green">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-users fa-3x"></i></figure>
              <span class="value"><span>total Student</span><?php //echo $dest; ?></span>
              <div class="areaprogress">
             
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 10.32%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Student</span><?php //echo  $dest; ?></div>
                <div class="col-sm-6"><span>This Month</span><?php //echo $destmonth; ?></div>
                
           
              </div>      <a class="themebtn btn-default btn-sm" href="<?php //echo ADMIN_URL; ?>Myapp/index">View Summary</a> 
              </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox orange">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-tag fa-3x"></i></figure>
                <?php //$donorcount=0;
//foreach($donerdetail as $keyd=>$valued) { $donorcount+=$valued['Doner']['amount'];  } ?>
            
              <span class="value"><span>  Total students   </span><i class="fa fa-graduation-cap" aria-hidden="true"></i>
<?php //echo $studentrecord; ?>
</span>
              <div class="areaprogress">
             
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 0.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total students</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $studentrecord; ?></div>
                     <?php //$thismonthdonation=0;
//foreach($donerdetailthismonth as $keyds=>$valueds) { $thismonthdonation+=$valueds['Doner']['amount'];  } ?>
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $studentmonth; ?>
</div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>category/index">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox purple">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon">
                <svg xml:space="preserve" style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" height="512px" width="512px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1">
                  <g>
                    <path d="M448,80H64L0,144v16v64c0,35.344,28.688,64,64,64v160c-35.313,0-64,28.656-64,64h512c0-35.344-28.625-64-64-64V288

                                                        c35.375,0,64-28.656,64-64v-64v-16L448,80z M384,224c0,17.656-14.375,32-32,32s-32-14.344-32-32v-64h64V224z M192,224

                                                        c0,17.656-14.344,32-32,32c-17.625,0-32-14.344-32-32v-64h64V224z M224,160h64v64c0,17.656-14.344,32-32,32

                                                        c-17.625,0-32-14.344-32-32V160z M32,224v-64h64v64c0,17.656-14.344,32-32,32C46.375,256,32,241.656,32,224z M96,448V279.125

                                                        c6.063-3.531,11.438-7.938,16-13.188C123.75,279.343,140.813,288,160,288c19.25,0,36.281-8.656,48-22.062

                                                        C219.75,279.343,236.813,288,256,288c11.75,0,22.562-3.375,32-8.875V448H96z M416,448h-96V279.125c9.438,5.5,20.312,8.875,32,8.875

                                                        c19.25,0,36.312-8.656,48-22.062c4.625,5.25,9.938,9.655,16,13.188V448z M480,224c0,17.656-14.375,32-32,32s-32-14.344-32-32v-64

                                                        h64V224z M448,64H64V0h384V64z M368,352c0,8.844-7.125,16-16,16c-8.812,0-16-7.156-16-16s7.188-16,16-16

                                                        C360.875,336,368,343.156,368,352z" fill="#a48ad4"/>
                  </g>
                </svg>
              </figure>
              <span class="value"><span>Total Questions</span><?php //echo $myquestioncount; ?></span>
              <div class="areaprogress">
            
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 13.04%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Questions</span><?php //echo $myquestioncount; ?></div>
                <div class="col-sm-6"><span>This Month</span><?php //echo $questionmonth; ?></div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>Interview/index">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox darkgreen">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
				  <?php //$count=0;
//foreach($yojanadetail as $key=>$value) { $count+=$value['Yojnapacks']['price'];  } ?>
              <figure class="icon"><img alt="" src="<?php echo $this->webroot; ?>admin_images/box_icon4.png"></figure>
             
              <span class="value"><span>Total Contacts</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $mycontactcount; ?></span>
              <div class="areaprogress">
               
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 0.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Contacts</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $mycontactcount; ?></div>
                  <?php //$counts=0;
//foreach($yojanadetailthismonth as $keys=>$values) { $counts+=$values['Yojnapacks']['price'];  } ?>
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr" aria-hidden="true"></i>
<?php //echo $contactmonth; ?></div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>contact/index">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox yellow">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-user-secret fa-3x"></i></figure>
              <span class="value"><span>Expenses</span><i class="fa fa-inr"></i>4567</span>
              <div class="areaprogress">
          
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 10.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
				  
			


                <div class="col-sm-6"><span>Total Expense</span><i class="fa fa-inr"></i>4567</div>
                
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr"></i>1200</div>
              </div>
              <a class="themebtn btn-default btn-sm" href="#">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>  
<!-- END OF FLIP BOXES -->

<!-- START OF GRAPH PANEL -->
 <section class="graphPanel">
 <div class="row">
      <aside class="col-sm-8 col-graph-box">
        <hgroup>
          <h4><strong>Earn</strong> Statistics</h4>
        </hgroup>
        <div class="graphcontainer">
          <div class="tabs_nav_container responsive">
            <ul class="nav nav-tabs" role="tablist">
           <li class="active"><a href="#tabs_1" aria-controls="tabs_1" role="tab" data-toggle="tab">JOBpost</a></li>
           <li><a href="#tabs_2" aria-controls="tabs_2" role="tab" data-toggle="tab">Student</a></li>
           <li><a href="#tabs_3" aria-controls="tabs_3" role="tab" data-toggle="tab">Members Donations</a></li>
           <li><a href="#tabs_4" aria-controls="tabs_4" role="tab" data-toggle="tab">Members</a></li>
           <li><a href="#tabs_5" aria-controls="tabs_5" role="tab" data-toggle="tab">Adopt</a></li>
           <li><a href="#tabs_6" aria-controls="tabs_6" role="tab" data-toggle="tab">Donor</a></li>
           <li><a href="#tabs_7" aria-controls="tabs_7" role="tab" data-toggle="tab">Special Members</a></li>
            </ul>
            <div class="tab-content"> 
              
              <!--tab1 start here--> 
              <div class="tab-pane fade in active" id="tabs_1">
                <div id="jobpost" style="height: 270px; width: 100%;"></div>
              </div>
              <!--tab1 end here--> 
              
              <!--tab2 start here--> 
              <div class="tab-pane fade" id="tabs_2">
               <div id="student" style="height: 270px; width: 100%;"></div>
              </div>
              <!--tab2 end here--> 
              
              <!--tab3 start here--> 
              <div class="tab-pane fade" id="tabs_3">
                <div id="MembersDonation" style="height: 270px; width: 100%;"></div>
              </div>
              <!--tab3 end here--> 
              
              <!--tab4 start here--> 
              <div class="tab-pane fade" id="tabs_4">
                <div id="Members" style="height: 270px; width: 100%;"></div>
              </div>
              
              <!--tab4 end here--> 
              <div class="tab-pane fade" id="tabs_5">
                <div id="Adopt" style="height: 270px; width: 100%;"></div>
              </div>
               <!--tab5 end here--> 
              <div class="tab-pane fade" id="tabs_6">
                <div id="Donor" style="height: 270px; width: 100%;"></div>
              </div>
               <!--tab6 end here--> 
              <div class="tab-pane fade" id="tabs_7">
                <div id="SpecialMembers" style="height: 270px; width: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
        
        <!--
                                <div class="paneltop"><h4><strong>Sales</strong> Statistics</h4></div>
                                <div class="graphcontainer" id="monthlysales"></div> --> 
      </aside>
      <aside class="col-sm-4 col-graph-content">
        <table class="table graphcontent">
          <thead>
            <tr>
              <th></th>
              <th>Total Earnings</th>
           
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td>Today</td>
              
                            <?php 	?>

              <td><i class="fa fa-inr"></i> <?php  //echo $yojanadetailthisday; ?></td>
          
            </tr>
            <tr>
              <td>This Week</td>
              <td><i class="fa fa-inr"></i>
            
              <?php //echo $week; ?></td>
              
            </tr>
            <tr>
              <td>This Month</td>
              <td><i class="fa fa-inr"></i>   <?php //echo $month_cash; ?></td>
           
            </tr>
            <tr>
              <td>Last 3 Months</td>
              <td><i class="fa fa-inr"></i> <?php //echo $month3Yojana_cash; ?></td>
          
            </tr>
            <tr>
              <td>Total</td> <?php /*$countgn=0;
foreach($yojanadetail as $key=>$value) { $countgn+=$value['Yojnapacks']['price'];  } 
foreach($donerdetail as $keyd=>$valued) { $countgn+=$valued['Doner']['amount'];  }*/ ?>

              <td><i class="fa fa-inr"></i> <?php //echo $total;  ?></td>
            
            </tr>
          </tbody>
        </table>
      </aside>
    </div>  
    </section>
<!-- END OF GRAPH PANEL -->    

<!-- START OF FLIP BOXES -->
<section class="flipboxes">
  <ul class="cellgrid row">
    <li>
      <div class="flipbox green">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-users fa-3x"></i></figure>
              <span class="value"><span>New Members</span><?php //echo  $members; ?></span>
              <div class="areaprogress">
         
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 10.32%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Users</span><?php //echo  $members; ?></div>
                <div class="col-sm-6"><span>This Month</span><?php //echo $userthismonth;?></div>
                
           
              </div>      <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>report/report">View Summary</a> 
              </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox orange">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-tag fa-3x"></i></figure>
                <?php /* $donorcount=0;
foreach($donerdetail as $keyd=>$valued) { $donorcount+=$valued['Doner']['amount'];  } */ ?>
            
              <span class="value"><span>Donations Members </span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $donorcount; ?>
</span>
              <div class="areaprogress">
     
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 0.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Donations</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $donorcount; ?></div>
                     <?php //$thismonthdonation=0;
//foreach($donerdetailthismonth as $keyds=>$valueds) { $thismonthdonation+=$valueds['Doner']['amount'];  } ?>
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $thismonthdonation; ?>
</div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>report/report">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox purple">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon">
                <svg xml:space="preserve" style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" height="512px" width="512px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1">
                  <g>
                    <path d="M448,80H64L0,144v16v64c0,35.344,28.688,64,64,64v160c-35.313,0-64,28.656-64,64h512c0-35.344-28.625-64-64-64V288

                                                        c35.375,0,64-28.656,64-64v-64v-16L448,80z M384,224c0,17.656-14.375,32-32,32s-32-14.344-32-32v-64h64V224z M192,224

                                                        c0,17.656-14.344,32-32,32c-17.625,0-32-14.344-32-32v-64h64V224z M224,160h64v64c0,17.656-14.344,32-32,32

                                                        c-17.625,0-32-14.344-32-32V160z M32,224v-64h64v64c0,17.656-14.344,32-32,32C46.375,256,32,241.656,32,224z M96,448V279.125

                                                        c6.063-3.531,11.438-7.938,16-13.188C123.75,279.343,140.813,288,160,288c19.25,0,36.281-8.656,48-22.062

                                                        C219.75,279.343,236.813,288,256,288c11.75,0,22.562-3.375,32-8.875V448H96z M416,448h-96V279.125c9.438,5.5,20.312,8.875,32,8.875

                                                        c19.25,0,36.312-8.656,48-22.062c4.625,5.25,9.938,9.655,16,13.188V448z M480,224c0,17.656-14.375,32-32,32s-32-14.344-32-32v-64

                                                        h64V224z M448,64H64V0h384V64z M368,352c0,8.844-7.125,16-16,16c-8.812,0-16-7.156-16-16s7.188-16,16-16

                                                        C360.875,336,368,343.156,368,352z" fill="#a48ad4"/>
                  </g>
                </svg>
              </figure>
              <span class="value"><span>Yojana</span><?php //echo $yojana; ?></span>
              <div class="areaprogress">
           
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 13.04%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Total Yojana</span><?php //echo $yojana; ?></div>
                <div class="col-sm-6"><span>This Month</span><?php //echo $yojanathismonth; ?></div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>yojana/index">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox darkgreen">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
				  <?php //$count=0;
//foreach($yojanadetail as $key=>$value) { $count+=$value['Yojnapacks']['price'];  } ?>
              <figure class="icon"><img alt="" src="<?php echo $this->webroot; ?>images/admin/box_icon4.png"></figure>
             
              <span class="value"><span>Yojana Earnings</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $count; ?></span>
              <div class="areaprogress">
               
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 0.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
                <div class="col-sm-6"><span>Yojana Earnings</span><i class="fa fa-inr" aria-hidden="true"></i><?php //echo $count; ?></div>
                  <?php /* $counts=0;
foreach($yojanadetailthismonth as $keys=>$values) { $counts+=$values['Yojnapacks']['price'];  }*/ ?>
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr" aria-hidden="true"></i>
<?php //echo $counts; ?></div>
              </div>
              <a class="themebtn btn-default btn-sm" href="<?php echo ADMIN_URL; ?>report/report">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="flipbox yellow">
        <div class="flipper">
          <div class="front">
            <div class="iconbox">
              <figure class="icon"><i class="fa fa-user-secret fa-3x"></i></figure>
              <span class="value"><span>Expenses</span><i class="fa fa-inr"></i>4567</span>
              <div class="areaprogress">
 
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 10.00%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="cell">
              <div class="group">
				  
			


                <div class="col-sm-6"><span>Total Expense</span><i class="fa fa-inr"></i>4567</div>
                
                <div class="col-sm-6"><span>This Month</span><i class="fa fa-inr"></i>1200</div>
              </div>
              <a class="themebtn btn-default btn-sm" href="#">View Summary</a> </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>  
<!-- END OF FLIP BOXES -->

    <section class="latst_order">
      <hgroup>
        <h4 class="pull-left">Latest 5 Donations </h4>
        <!--<a href="" class="themebtn btn-default btn-sm">View All</a>-->
        <div class="view_drop pull-right">
         <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="viewdrop"><i class="fa fa-ellipsis-v fa-lg"></i></a>
            <div class="dropdown-menu" aria-labelledby="viewdrop">
              <ul class="linksvertical">
                <li><a href="<?php echo ADMIN_URL; ?>member/index">View All</a></li>
              </ul>
            </div>
         </div>
      </hgroup>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th width="2%">#</th>
                <th width="15%">Member Name</th>
                <th width="15%">Gender</th>
                <th width="15%">City</th>
                <th width="15%">Email</th>
                                <th width="15%">DOB</th>

                <th width="8%"></th>
              </tr>
            </thead>
            <tbody>
				<?php  //foreach($customermanager as $key=>$iteam) { 
				//pr($iteam); ?>
              <tr>
                <td><?php //echo $iteam['CustomerManager']['id'];?></td>
                <td><?php //echo $iteam['CustomerManager']['membername'];?></td>
                <td><?php //echo $iteam['CustomerManager']['gender'];?></td>
                 <td><?php //echo $iteam['CustomerManager']['city'];?></td>
                <td><?php //echo $iteam['CustomerManager']['email'];?></td>
      <td><?php //echo $iteam['CustomerManager']['dateofbirth'];?></td>
                <!--<td><?php// echo date('j, F Y',strtotime($iteam['Doner']['city'])); ?></td> -->
                <td><i class="fa fa-inr"></i><?php //echo number_format($iteam['Doner']['amount']);?></td>
                <td> <?php /*if($iteam['Doner']['status']=='N'){ ?><span class="label label-info"> Pending</span><?php }else{ ?>
                <span class="label label-success"> Process</span><?php }*/ ?></td>
                <td><a title="View customers" href="<?php echo ADMIN_URL; ?>customerManager/index" class="fa fa-eye"></a></td>
              </tr>
             <?php  //} ?>
            </tbody>
          </table>
        </div>
    </section>

  
   
