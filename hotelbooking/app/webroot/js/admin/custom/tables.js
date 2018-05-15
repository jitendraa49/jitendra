jQuery(document).ready(function(){ 

	jQuery('.stdtablecb .checkall').click(function(){
		var parentTable = jQuery(this).parents('table');										   
		var ch = parentTable.find('tbody input[type=checkbox]');										 
		if(jQuery(this).is(':checked')) {
		
			//check all rows in table
			ch.each(function(){ 
				jQuery(this).attr('checked',true);
				jQuery(this).parent().addClass('checked');	//used for the custom checkbox style
				jQuery(this).parents('tr').addClass('selected');
			});
						
			//check both table header and footer
			parentTable.find('.checkall').each(function(){ jQuery(this).attr('checked',true); });
		
		} else {
			
			//uncheck all rows in table
			ch.each(function(){ 
				jQuery(this).attr('checked',false); 
				jQuery(this).parent().removeClass('checked');	//used for the custom checkbox style
				jQuery(this).parents('tr').removeClass('selected');
			});	
			
			//uncheck both table header and footer
			parentTable.find('.checkall').each(function(){ jQuery(this).attr('checked',false); });
		}
	});
	
	
	jQuery('.stdtablecb tbody input[type=checkbox]').click(function(){
		if(jQuery(this).is(':checked')) {
			jQuery(this).parents('tr').addClass('selected');	
		} else {
			jQuery(this).parents('tr').removeClass('selected');
		}
	});
	
	//delete selected row in table
	jQuery('.deletebutton').click(function(){
		var inputs = document.getElementsByName('multipledelete[]');
		var checked = [];
		for (var i = 0; i < inputs.length; i++) {
		  if (inputs[i].type == "checkbox") {
			if (inputs[i].checked)
			  checked.push(inputs[i]);
		  }
		}
		var inputChecked = checked.length;
		if(inputChecked>0) {
			if(!confirm('Are you sure that you want to delete that records'))
				return false;
		} else {
			alert('No data selected please select at last one value');
			return false;
		}
	});
	
	
	//delete individual row
	jQuery('.stdtable a.delete').click(function(){
		var c = confirm('Continue delete?');
		if(c) jQuery(this).parents('tr').fadeOut(function(){ 
			jQuery(this).remove();
		});
		return false;
	});
	
	//get data from server and inject it next to row
	jQuery('.stdtable a.toggle').click(function(){
												
		//show all hidden row and remove all showed data
		jQuery(this).parents('table').find('tr').each(function(){
			jQuery(this).removeClass('hiderow');
			if(jQuery(this).hasClass('togglerow'))
				jQuery(this).remove();
		});
		
		var parentRow = jQuery(this).parents('tr');
		var numcols = parentRow.find('td').length + 1;				//get the number of columns in a table. Added 1 for new row to be inserted				
		var url = jQuery(this).attr('href');
		
		//this will insert a new row next to this element's row parent
		parentRow.after('<tr class="togglerow"><td colspan="'+numcols+'"><div class="toggledata"></div></td></tr>');
		
		var toggleData = parentRow.next().find('.toggledata');
		
		parentRow.next().hide();
		
		//get data from server
		jQuery.post(url,function(data){
			toggleData.append(data);						//inject data read from server
			parentRow.next().fadeIn();						//show inserted new row
			parentRow.addClass('hiderow');					//hide this row to look like replacing the newly inserted row
		});
				
		return false;
	});
		
	jQuery('.toggledata button.cancel, .toggledata button.submit').live('click',function(){
		jQuery(this).parents('.toggledata').animate({height: 0},200, function(){
			jQuery(this).parents('tr').prev().removeClass('hiderow');															 
			jQuery(this).parents('tr').remove();
		});
		return false;
	});
	
	
/*	jQuery('#dyntable').dataTable( {
		"sPaginationType": "full_numbers"
	});
	
*/
	//for checkbox
	jQuery('input[type=checkbox]').each(function(){
		var t = jQuery(this);
		t.wrap('<span class="checkbox"></span>');
		t.click(function(){
			if(jQuery(this).is(':checked')) {
				t.attr('checked',true);
				t.parent().addClass('checked');
			} else {
				t.attr('checked',false);
				t.parent().removeClass('checked');
			}
		});
	});

});