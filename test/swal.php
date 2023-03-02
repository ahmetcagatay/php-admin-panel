<!DOCTYPE html>
<html lang="en">

<head>
	<title>SWAL TEST</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <script src="js/sweatalert-custom.js"></script> -->

</head>
<button id="register-button" onclick="fSwal('warning')">Register</button>


<!--SWEATALERT===============================================================================================-->
<!-- <link rel="stylesheet" type="/text.css" href="/css/main.css" /> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	// On mouse-over, execute myFunction
	function fSwal($icon) {
		swal("Good Job", "You clicked button", $icon)
	
	}
</script>

</body>

</html>