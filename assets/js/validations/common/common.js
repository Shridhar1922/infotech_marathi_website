	$(document).on('click', '.block_record', function() { 
        var actionDiv = $(this); 
		var id = actionDiv.attr('rel');  
        var flash = actionDiv.attr('flash');
		var table = actionDiv.attr('table');
		var status='block';
		
		if (confirm('Do you really want to change this status ?')) {
			$.ajax({
                url: base_url+'active-block',                    
                type: 'POST',
                dataType: 'json',
                data: {pk_id:id,flashdata_message:flash,table:table,status:status},
                success: function(data) {
					location.reload();                       				
                }
            });
		}
    });
   
    $(document).on('click', '.active_record', function() 
    {         
        var actionDiv = $(this); 
		var id = actionDiv.attr('rel');  
        var flash = actionDiv.attr('flash');
		var table = actionDiv.attr('table');
		var status='active';
		
		if (confirm('Do you really want to change this status ?')) {
			$.ajax({
                url: base_url+'active-block',                    
                type: 'POST',
                dataType: 'json',
                data: {pk_id:id,flashdata_message:flash,table:table,status:status},
                success: function(data) {
					location.reload();                       				
                }
            });
		}
	});
	
	$(document).on('click', '.delete', function() 
    {           
        var actionDiv = $(this); 
		var id = actionDiv.attr('rel');  
        var flash = actionDiv.attr('flash');
		var table = actionDiv.attr('table');
		
		if (confirm('Do you really want to delete this record ?')) {
			$.ajax({
                url: base_url+'soft-delete',                    
                type: 'POST',
                dataType: 'json',
                data: {pk_id:id,flashdata_message:flash,table:table},
                success: function(data) {
					location.reload();                       				
                }
            });
		}
	});
	
	
	