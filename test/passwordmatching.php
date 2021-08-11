<!DOCTYPE html>
<html lang="en">

<head>
	<title>password matching TEST</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <script src="js/sweatalert-custom.js"></script> -->

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$('#password, #confirm_password').on('keyup', function() {
			if ($('#password').val() == $('#confirm_password').val()) {
				$('#message').html('Matching').css('color', 'green');
			} else
				$('#message').html('Not Matching').css('color', 'red');
		});
	});
</script>

<label>password :
	<input name="password" id="password" type="password" />
</label>
<br>
<label>confirm password:
	<input type="password" name="confirm_password" id="confirm_password" />
	<span id='message'>sadf</span>
</label>

</body>

</html>