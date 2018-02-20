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
	$('span.label').on('click',function(){
		$('span.label').removeClass('label label-danger').addClass('label label-default');
		$(this).removeClass('label label-default').addClass('label label-danger');
			if ($('#show_photo').hasClass('label label-danger')) {
				$.ajax({
					url: 'viewphoto',
					type: 'GET',
					success: function(result){
						$("#formImage").html(result);
					}
				});
			}


	});
});