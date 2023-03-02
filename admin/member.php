<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Panel</title>

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
                            <p>Member List</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="pe-7s-user"></i>
                            <p>Update Profile</p>
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
                        <a class="navbar-brand" href="#">Update Profile</a>
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
                            <h4 id="title" class="title">Update Profile</h4>
                        </div>
                        <div class="content">
                            <!-- <form> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input id="id" type="text" class="form-control" placeholder="123" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="email" type="email" class="form-control" placeholder="asdf@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="admin">Access</label><br>
                                        <input type="radio" id="member" name="access" value="0">
                                        <label for="member">Member</label><br>
                                        <input type="radio" id="admin" name="access" value="1">
                                        <label for="admin">Manager</label><br>
                                    </div>
                                </div>

                            </div>
                            
                            <form action="index.php">
                                <button id="back" type="submit" class="btn btn-info btn-fill pull-left " style="margin-right:10px;"><- BACK</button>
                            </form>
                            <button id="delete" type="submit" class="btn btn-danger btn-fill pull-left ">Delete</button>

                            <button id="update" type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                            <div class="clearfix"></div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div> -->

                <!-- </div> -->
                <!-- </div> -->

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
<script type="text/javascript">
    // Sorting according to the parameters given to the page #
    var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
    for (var i = 0; i < hashParams.length; i++) {
        var p = hashParams[i].split('=');
        
        if (p[0] == "email"){
            document.getElementById("title").innerHTML = decodeURIComponent(p[1]).split("@")[0];
        }


        if(p[0] != "access"){
            document.getElementById(p[0]).value = decodeURIComponent(p[1]);
        }else{
            radios = document.getElementsByName("access");
            for(i=0; i < radios.length; i++){
                if(radios[i].value == p[1]){
                    radios[i].checked = true;
                }
            }
            
        }
    };
</script>

<script type="text/javascript">
    //DELETE MEMBER
    $(document).ready(function() {
        
        $('#delete').on('click', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "This process cannot be taken back!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete Member',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    var data = {
                        id: $('#id').val()
                        
                    };
                    $.ajax({
                        type: 'GET',
                        url: 'delete.php',
                        data: data,
                        success: function(result) {
                            if (result == "1") {
                                Swal.fire("Congratulations", "Member Deleted", "success");
                                setTimeout(function (){

                                // Something you want delayed.
                                window.location.href = "index.php";
                                }, 2000);
                                
                            } else {
                                Swal.fire("Error", result, "error");
                            }
                        }
                    });
                }
            })
            
        });
    });
    </script>
    <script type="text/javascript">
    //UPDATE MEMBER
    $(document).ready(function() {
        $('#update').on('click', function() {
            var data = {
                id: $('#id').val(),
                email: $('#email').val(),
                access: $('input[name="access"]:checked').val()

            };
            $.ajax({
                type: 'GET',
                url: 'update.php',
                data: data,
                success: function(result) {
                    if (result == "1") {
                        Swal.fire({
                            
                            title:"Congratulations", 
                            text:"Member Updated", 
                            icon:"success",
                            confirmButtonText:'Ok'
                            }
                            );
                            
                        setTimeout(function() {window.location.href = "index.php";}, 2000);
                    } else {
                        Swal.fire("Error", result, "error");
                    }
                }
            });
        });
    });
    
</script>

</html>