$(document).ready(function(){
	if ($("#update_photo").hasClass("label label-danger")) {
  			
		$.ajax({
			url: 'show',
			type: 'GET',
			success: function(result){
				$("#formImage").html(result);
				
			}
		});    
	}
});