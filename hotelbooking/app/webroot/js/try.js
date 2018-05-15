var site_url='<?php echo SITE_URL;?>';

$(document).ready(function(){
    $("#test").click(function(){
    	event.preventDefault();

	
         $("#div1").load(site_url+"admin/users/add");
        
    });
});



$(document).ready(function(){
    $("#view").click(function(){
		event.preventDefault();
         $("#div1").load(site_url+"admin/users");
        
    });
});
