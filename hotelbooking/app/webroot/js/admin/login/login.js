$(document).ready(function () {	  
			$('#login').show().animate({   opacity: 1 }, 2000);
			$('.logo').show().animate({   opacity: 1,top: '40%'}, 800,function(){			
			$('.logo').show().delay(1200).animate({   opacity: 1,top: '1%' }, 300,function(){
				$('.formLogin').animate({   opacity: 1,left: '0', top: '8px' }, 300);
				$('.userbox').animate({ opacity: 0 }, 200).hide();
			 });		

			  })	
			$(".on_off_checkbox").iphoneStyle();
			$('.tip a ').tipsy({gravity: 'sw'});
			$('.tip input').tipsy({ trigger: 'focus', gravity: 'w' });
		});	
	    $('.userload').click(function(e){
			$('.formLogin').animate({   opacity: 1,left: '0' }, 300);			    
			  $('.userbox').animate({ opacity: 0 }, 200,function(){
				  $('.userbox').hide();				
			   });
	    });
	
	function checkuser() {
	/*$('#but_login').click(function(e){	*/
		var baseurl = $('#baseurl').text();
		
		  if($('#username_id').val() == "" || $('#password').val() == "")
		  {
			  showError("Please Input Username / Password");
			  $('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
			  $('.inner').trigger('startRumble');
			  setTimeout('$(".inner").trigger("stopRumble")',500);
			  setTimeout('hideTop()',5000);
			  return false;
		  }		
		 hideTop();
		 loading('Checking',1);		
		 setTimeout( "unloading()", 2000 );
		 document.form.submit();
		 
		 /*var username = $('#username_id').val();
		 var password = $('#password').val();
		 var postData = 'username='+username+'&password='+password;
		 $.ajax({ 
			//this is the php file that processes the data and send mail
			url: baseurl+"users/login",
			
			//GET method is used
			type: "post",
			
			//pass the data        
			data: postData,    
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {     
				//if process.php returned 1/true (send mail success)
				if (html=='true') {                 
					setTimeout( "Login()", 2500 );
				} else {
					showError("Invalid login attemp.Please Input correct Username & Password");
					$('.inner').jrumble({ x: 4,y: 0,rotation: 0 });	
					$('.inner').trigger('startRumble');
					setTimeout('$(".inner").trigger("stopRumble")',500);
					setTimeout('hideTop()',5000);
					return false;	
				}
			}      
		});*/
									 
	}

		
																 
function Login(){
	var baseurl = $('#baseurl').text();
	$("#login").animate({   opacity: 1,top: '49%' }, 200,function(){
		 $('.userbox').show().animate({ opacity: 1 }, 500);
			$("#login").animate({   opacity: 0,top: '60%' }, 500,function(){
				$(this).fadeOut(100,function(){
				  $(".text_success").slideDown();
				  $("#successLogin").animate({opacity: 1,height: "200px"},500);   			     
				});							  
			 })	
     })	
			setTimeout( "window.location.href='dashboard'", 1500 );
			
			
}


	
$('#alertMessage').click(function(){
	hideTop();
});

function showError(str){
	$('#alertMessage').addClass('error').html(str).stop(true,true).show().animate({ opacity: 1,right: '10'}, 500);	
	
}

function showSuccess(str){
	$('#alertMessage').removeClass('error').html(str).stop(true,true).show().animate({ opacity: 1,right: '10'}, 500);	
}

function hideTop(){
	$('#alertMessage').animate({ opacity: 0,right: '-20'}, 500,function(){ $(this).hide(); });	
}	
function loading(name,overlay) {  
	  $('body').append('<div id="overlay"></div><div id="preloader">'+name+'..</div>');
			  if(overlay==1){
				$('#overlay').css('opacity',0.1).fadeIn(function(){  $('#preloader').fadeIn();	});
				return  false;
		 }
	  $('#preloader').fadeIn();	  
 }
 function unloading() {  
		$('#preloader').fadeOut('fast',function(){ $('#overlay').fadeOut(); });
 }
