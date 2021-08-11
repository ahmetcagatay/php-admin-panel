<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Paneli</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />




</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://mirket.org" class="simple-text">
                        Mirket
                    </a>
                </div>

                <ul class="nav">

                    <li>
                        <a href="index.php">
                            <i class="pe-7s-note2"></i>
                            <p>Üye Listesi</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="pe-7s-user"></i>
                            <p>Ekle</p>

                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                            <a href="index.php">
                                <button id="back" type="button" class="btn btn-info btn-fill pull-left " style="margin-right:10px;">
                                    <- GERİ</button>
                            </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">

                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="../index.php">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <!-- <div class="container-fluid"> -->
                <!-- <div class="row"> -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 id="title" class="title">Ekle</h4>
                        </div>
                        <div class="content">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="email-result">E-Posta</label>
                                            <input id="email" type="email" class="form-control" placeholder="asdf@gmail.com" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Şifre</label>
                                            <input id="password" type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="password-result">Şifre Tekrarı</label>
                                            <input id="confirm_password" type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admin">Yetki</label><br>
                                            <input type="radio" id="member" name="access" value="0" required>
                                            <label for="member">Üye</label><br>
                                            <input type="radio" id="admin" name="access" value="1">
                                            <label for="admin">Yönetici</label><br>
                                        </div>
                                    </div>

                                </div>

                                <button id="add" type="submit" class="btn btn-primary btn-fill my-2 my-sm-0 pull-right"><i class="fa fa-plus" aria-hidden="true"></i>Ekle</button>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>



</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<!-- AJAX -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- SWAL -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Validation -->
<!-- <link href="../js/validation.js" rel="text/javascript"> -->


<script type="text/javascript">
    $(document).ready(function() {
        $('#password, #confirm_password').on('keyup', function() {
            console.log($('#password').val().length);
            if ($('#password').val() && $('#confirm_password').val() && ($('#confirm_password').val().length >= $('#password').val().length)) {
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('.password-result').html('Şifre Eşleşiyor').css('color', 'green');
                } else
                    $('.password-result').html('Şifre Eşleşmiyor').css('color', 'red');
            } else {
                $('.password-result').html('Şifre Tekrarı').css("color", "#B7B8B7");
            }

        });
    });


    // EMAİL DOĞRULAMA
    $(document).ready(function() {
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (re.test(email))
                return true;
            else
                return false;
        }

        $("#email").on("blur", function() {
            $("#email-result").val();
            $(this).val();
            console.log($(this).val());
            if ($(this).val()) {

                if (validateEmail($(this).val())) {
                    $(".email-result").css("color", "green");
                    $(".email-result").text("E-posta girişi doğru");
                } else {
                    $(".email-result").css("color", "red");
                    $(".email-result").text("E-posta girişi yanlış");
                };
            } else {
                $(".email-result").css("color", "#9A9A9A");
                $(".email-result").text("E-posta");
            }
        });
    });
</script>


<script type="text/javascript">
    // $("#back").click(function() {
    //     window.location.href = 'index.php';
    // });
    $(document).ready(function() {
        $("form").on("submit", function(e) {
            e.preventDefault();

            var data = {
                email: $('#email').val()
            };
            $.ajax({
                type: 'GET',
                url: '_check_user.php',
                data: data,
                success: function(result) {
                    console.log(result);
                    if (parseInt(result) <= 0) {

                        var data = {
                            email: $('#email').val(),
                            password: $('#password').val(),
                            access: $('input[name="access"]:checked').val()
                        };
                        $.ajax({
                            type: 'GET',
                            url: '_add.php',
                            data: data,
                            success: function(result) {
                                if (result == "1") {
                                    Swal.fire({

                                        title: "Tebrikler",
                                        text: "Kullanıcı Eklendi",
                                        icon: "success",
                                        confirmButtonText: 'Tamam'
                                    });
                                    setTimeout(function() {
                                        window.location.href = "index.php";
                                    }, 2000);
                                } else {
                                    Swal.fire("Hata", result, "error");
                                }
                            }
                        });
                    } else {
                        Swal.fire("Hata", "E-posta önceden kullanılmış", "error");
                    }
                }
            });
        });
    });
</script>

</html>