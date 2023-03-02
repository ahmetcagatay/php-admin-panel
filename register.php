<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">



</head>

<body style="background-color: #ffffff;">

	<h1>
		<!-- <?php

				if ($_POST) {


					// Connect Database
					$dbservername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "app";
					// Create connection
					$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} else {
						$email = $_POST["email"];
						$crypto_password = md5(trim($_POST["pass"]));
						// $password = $_POST["pass"];


						$sql = "SELECT * FROM members WHERE email='$email'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// Look at all the matching results
							while ($row = $result->fetch_assoc()) {
								echo "id: " . $row["id"] . " <br>Name: " . $row["email"] . " <br>Password:  " . $row["password"] . "<br>";

								// if password is matched
								if ($row["password"] == $crypto_password) {
									// locate to main page
									header("Location:main.php?email=$email");
								} else {
									echo "Password incorrect";
								}
							}
						} else {
							// echo "Username or password wrong, try again";

							// save member
							$sql = "INSERT INTO members (email, password, access) 
					VALUES ('$email', '$crypto_password', '0')";

							if ($conn->query($sql) === TRUE) {
								$feedback = "Member Saved";
							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
					}



					$conn->close();
				}

				?> -->

	</h1>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-20">

						<?php
						if (isset($feedback)) {
							echo $feedback;
						} else {
							echo "Register";
						}
						?>
					</span>
					<div class="wrap-input100 validate-input" data-validate="Email address it should be like: example@mail.com ">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="password required">
						<input class="input100" type="password" name="pass1" id="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="password confirm required">
						<input class="input100" type="password" name="pass2" id="confirm_password">
						<span class="focus-input100"></span>
						<span class="label-input100" id="message">Confirm Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">


						<div>
							<a href="index.php" class="txt1">
								Login
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>


				</form>
				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>



	<!--AJAX===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#password, #confirm_password').on('keyup', function() {
				if ($('#password').val() && $('#confirm_password').val()) {
					if ($('#password').val() == $('#confirm_password').val()) {
						$('#message').html('matched').css('color', 'green');
					} else
						$('#message').html('not matched').css('color', 'red');
				} else {
					$('#message').html('Confirm Password').css("color", "#B7B8B7");
				}

			});
		});
		$(document).ready(function() {
			$("button").click(function() {
				$.ajax({
					url: "demo_test.txt",
					success: function(result) {
						$("#div1").html(result);
					}
				});
			});
		});
	</script>


</body>

</html>