<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
<title>Administrator Login | HotelBooking</title>
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link href="<?php echo $this->webroot; ?>css/admin/login/login.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->webroot; ?>css/admin/login/icon.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>components/tipsy/tipsy.css" media="all"/>
<style type="text/css">
html {
	background-image: none;
}
#versionBar {
	background-color:#212121;
	position:fixed;
	width:100%;
	height:35px;
	bottom:0;
	left:0;
	text-align:center;
	line-height:35px;
}
.copyright{
	text-align:center; font-size:10px; color:#CCC;
}
.copyright a{
	color:#A31F1A; text-decoration:none
}    
</style>
</head>
<body >
   
  
<?php echo $this->Session->flash('auth'); ?>

   
<div id="alertMessage" class="error"></div>
<div id="successLogin"></div>
<div class="text_success"><img src="<?php echo $this->webroot; ?>admin_images/login/loader_green.gif"  alt="ziceAdmin" /><span>Please wait</span></div>
 <div id="baseurl" style="display:none"><?php echo ADMIN_URL; ?></div>
<div id="login" >
  <div class="ribbon"></div>
  <div class="inner">
  <div  class="logo"><img src="<?php echo $this->webroot; ?>admin_images/daac.png"  alt="logo" style="
    margin-left: -75px;
    height: 76px;
    width: 224px;
"/></div>
  <div class="userbox"></div>
  <div class="formLogin"> 
  
  <?php echo $this->Form->create('User',array('inputDefaults'=>array('label'=>false),'id'=>'formLogin','name'=>'formLogin','onSubmit'=>'return checkuser()'));?>
  <!--<form action=""  method="post" id="formLogin" name="formLogin" onSubmit="return checkuser()">-->
          <div class="tip">
          <?php echo $this->Form->input('username',array('id'=>'username_id')); ?>
          <!--<input name="username" type="text"  id="username_id"  title="Username"   />-->
          </div>
          <div class="tip"><?php echo $this->Form->input('password',array('id'=>'password')); ?>
          <!--<input name="password" type="password" id="password"   title="Password"  />-->
          </div>
          <div style="padding:20px 0px 0px 0px ;">
            <div style="float:left; padding:0px 0px 2px 0px ;">
             <?php echo $this->Form->checkbox('remember',array('id'=>'on_off','class'=>'on_off_checkbox')); ?>
           
              <span class="f_help">Remember me</span>
              </div>
          <div style="float:right;padding:2px 0px ;">
              <div> 
                <ul class="uibutton-group">
                   <li>
                   
                   <input type="submit" name="login" value="Login" style="height:27px;" class="uibutton normal" id="but_login">&nbsp;&nbsp;&nbsp;&nbsp;
                 </li>
               </ul>
              </div>
            </div>
</div>
</form>
   <?php // echo $this->Form->end(__(''));?>
  </div>
</div>
  <div class="clear"></div>
  <div class="shadow"></div>
</div>

<!--Login div-->
<div class="clear"></div>
<div id="versionBar" >
  <div class="copyright" > &copy; Copyright <?php echo date('Y');?> All Rights Reserved By <span class="tip"><a href="">Hotel Booking</a> </span> </div>
  <!-- // copyright-->
</div>
<!-- Link JScript-->
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/login/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>components/effect/jquery-jrumble.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>components/ui/jquery.ui.min.js"></script>     
<script type="text/javascript" src="<?php echo $this->webroot; ?>components/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>components/checkboxes/iphone.check.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/admin/login/login.js"></script>
</body>
</html>
