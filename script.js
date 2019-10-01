$(function (){
	var $csrf_token = $('#csrf-token');
	var session_id = document.cookie.split(";")[0].split("=")[1];

	$.ajax({
		type: 'POST',
		url: 'G_Csrf.php',
		dataType: 'json',
		data: {session_id},
		success: function(result){
			console.log(result.id);
			$csrf_token.val(result.id);
		}
	});
});

