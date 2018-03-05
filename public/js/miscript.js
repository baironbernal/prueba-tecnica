$(document).ready(function(){

 var playing = false;
 $("#botonmusic").on('click',function(){
		alert("s");
        $(this).toggleClass("down");
 
        if (playing == false) {
            document.getElementById('player').play();
            playing = true;
            $(this).text("Parar Sonido");
 
        } else {
            document.getElementById('player').pause();
            playing = false;
            $(this).text("Reiniciar Sonido");
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