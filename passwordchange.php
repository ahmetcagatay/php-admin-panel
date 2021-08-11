<!DOCTYPE html>
<html lang="en">

<head>
	<title>Şifre Değiştir</title>
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
	<!--===============================================================================================-->


</head>

<body style="background-color: #ffffff;">

	<h1>
		<?php

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

				// KULLANICIYI SORGULA
				$sql = "SELECT * FROM members WHERE email='$email'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// TÜM EŞLEŞEN SONUÇLARA BAK
					while ($row = $result->fetch_assoc()) {
						// EĞER EMAİL VARSA
						header("Location:emailcheck.php?email=$email");
					}
				} else {
					$feedback = "E-Posta Bulunamadı";
				}
			}
			$conn->close();
		}

		?>

	</h1>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-20">

						<?php
						if (isset($feedback)) {
							echo $feedback;
						} else {
							echo "Şifre Değiştir";
						}
						?>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Email adresiniz şu şekilde olmalıdır: ornek@mail.com">

						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">E-POSTA</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="index.php" class="txt1">
								Şifremi Hatırladım
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Kod Gönder
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
	<!--SWEATALERT===============================================================================================-->
	<link rel="stylesheet" type="/text.css" href="/css/main.css" />
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>