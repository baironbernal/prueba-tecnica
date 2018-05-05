$(document).ready(function(){

//document.getElementById('player').play();
playing = true;
$("#botonmusic").removeClass("glyphicon glyphicon-play").addClass("glyphicon glyphicon-pause");

 $("#botonmusic").on('click',function(){
        $(this).toggleClass("down");
        if (playing == true) {
		document.getElementById('player').pause();
		playing = false;
		$('#botonmusic').removeClass('glyphicon glyphicon-pause').addClass('glyphicon glyphicon-play');  
        } else {
            document.getElementById('player').play();
            playing = true;
			$("#botonmusic").removeClass("glyphicon glyphicon-play").addClass("glyphicon glyphicon-pause");
        }
 });
    

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