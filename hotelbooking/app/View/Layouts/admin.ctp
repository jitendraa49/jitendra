<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title_for_layout?></title>

<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/admin/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/admin/jquery.selectbox.css" type="text/css" />

<link href="<?php echo $this->webroot; ?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/admin/bootstrap.offcanvas.min.css"/>
<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/admin/custom.css" type="text/css" />


<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->webroot;?>images/favicon-16x16.png">
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="<?php echo $this->webroot; ?>css/admin/ie9.css"/>
<![endif]-->
 
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="<?php echo $this->webroot; ?>css/admin/ie8.css"/>
<![endif]-->
 
<!--[if IE 7]>
    <link rel="stylesheet" media="screen" href="<?php echo $this->webroot; ?>css/admin/ie7.css"/>
<![endif]-->

<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/plugins/jquery.dataTables.min.js"></script>
<?php /*?><script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/plugins/jquery-ui-1.8.16.custom.min.js"></script><?php */?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot; ?>js/admin/bootstrap.offcanvas.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/custom/tables.js"></script>

<?php /*?><script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/custom/general.js"></script><?php */?>


<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/plugins/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/plugins/jquery.alerts.js"></script>

<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/custom/elements.js"></script>


<!--[if IE]><script src="<?php echo $this->webroot; ?>js/admin/excanvas.js"></script><![endif]-->

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/custom/uploadfile.jqueru.js"></script>


<script type="text/javascript">


function get_category_by_type(type){
	$.post("<?php echo SITE_URL; ?>ajax/cagegories/"+type,
		function(data){
		$('#parent_categories').html(data);
	});
	
}
function select_institution_type(categoryid){
	$.post("<?php echo SITE_URL; ?>ajax/get_intitutions_type/"+categoryid,
		function(data){ 
		$('#intitution_type').html(data);
	});
	
}
function select_institution(typeid){
	$.post("<?php echo SITE_URL; ?>ajax/get_intitutions/"+typeid,
		function(data){ 
		$('#intitutions').html(data);
	});
	
}
// change the permission of the given module 
function change_permission(id,permission){
		$.post("<?php echo SITE_URL; ?>ajax/change_permission/"+id+"/"+permission,
		 $('#permission_'+id).html('<img alt="" src="<?php echo WEBROOT_URL; ?>admin_images/loaders/loader4.gif">'),
		function(data){ 
		$('#permission_'+id).html(data);
	});	
}

// get categoies according to given cagetory type
function changeCagegories(model){ 
	categoryType = $("#multiple").val() || [];	
	$.post("<?php echo SITE_URL; ?>ajax/getcategory_by_type/"+categoryType+"/"+model,
		 $('#child_categories').html('<img alt="" src="<?php echo WEBROOT_URL; ?>admin_images/loaders/loader4.gif">'),
		function(data){ 
		$('#child_categories').html(data);
	});	
}



$(document).ready(function() {
  $('#slug').focus(function() {
		var title =  $('#title').val();				
		var slug = title.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
		this.value = slug.toLowerCase();					
		
	});
});


</script>
<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;

}
function isNumber1(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 46 || charCode > 57 || charCode == 47)) {
        alert("Please insert only numbers");
        return false;
    }
    return true;

}
</script>
<?php //echo $this->element('datetimepicker'); ?>
</head>
<body class="loggedin">

<!-- START OF HEADER -->
<header class="clearfix">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle offcanvas-toggle pull-left" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                        <span class="sr-only">Toggle navigation</span>
                        <span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="col-xs-5 col-sm-6 col-lg-7 text-center">  <a class="navbar-brand" href="#"><img src="<?php echo $this->webroot; ?>admin_images/daac.png"  alt="logo" style="height:66px;width: 354px; margin-left:-11px;" /> </a></div>
                <?php echo $this->element('admin/header'); ?>
            </div>
        </nav>
        
    </header>
<!-- END OF HEADER -->

    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper container-fluid">
     	<div class="mainwrapperinner">
            <!--mainleft start-->	
           <?php echo $this->element('admin/left'); ?>
            <!--mainleft end-->
               
                <?php echo $this->fetch('content'); ?>
           
            </div><!--maincontent-->
            <div style="clear:both; height:10px;">&nbsp;</div>
        </div><!--mainwrapperinner-->
<!-- END OF MAIN CONTENT -->

<!-- START OF FOOTER -->
<footer>
            <?php //echo $this->element('sql_dump'); ?>
            shoponcell &copy; <?php echo date('Y');?>. All Rights Reserved.

</footer>
<!-- END OF FOOTER -->

    <?php //echo $this->element('admin/uploads_content');?>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/custom/jquery.selectbox.js"></script>
<script type="text/javascript"> $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true}); </script>  	

</body>
</html>


