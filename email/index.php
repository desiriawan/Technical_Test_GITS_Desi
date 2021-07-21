<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Check Format Email</title>
</head>
<body>

<h1>Check Format Email</h1>

Email: <input type="email" id="email"> <span id="feedback"></span>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script type="text/javascript">

function validate(email){
	$.post('check_email.php', { email: email }, function(data){
		$('#feedback').html(data);
	});
}
	
$(document).ready(function(){
	$('#email').focusin(function(){

		if($('#email').val() === ''){
			$('#feedback').text('Masukan alamat email Anda');
		}else{
			validate($('#email').val());
		}

	}).blur(function(){
		$('#feedback').text('');
	}).keyup(function(){
		validate($('#email').val());
	});
});

</script>

</body>
</html>