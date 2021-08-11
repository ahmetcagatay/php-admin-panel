<?php

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
    $feedback = "Database'e bağlanılamadı";
} else {
    // TÜM LİSTEYİ SORGULA
    $sql = "SELECT * FROM members ORDER BY access DESC";
    $result = $conn->query($sql);
    if ($result->num_rows <= 0) {
        $feedback = "Database'de satır bulunamadı";
    }

?>
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

                        <li class="active">
                            <a href="#">

                                <i class="pe-7s-note2"></i>
                                <p>Üye Listesi</p>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="member.php">
                                <i class="pe-7s-user"></i>
                                <p>Profili Güncelle</p>
                            </a>
                        </li> -->

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
                            <a class="navbar-brand" href="#">Üye Listesi</a>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Tüm Üyeler</h4>
                                        <p class="category">Mirket topluluğu üyelerini buradan araştırabilirsiniz.</p>
                                    </div>

                                    <nav class="navbar navbar-light">
                                        <!-- Navbar content -->
                                        <form class="form-inline my-2 my-lg-0" action="javascript:void(0);">
                                            <button id="add" type="submit" class="btn btn-primary btn-fill my-2 my-sm-0"><i class="fa fa-plus" aria-hidden="true"></i>Ekle</button>
                                            <input id='myInput' onkeyup='searchTable()' type='text' class="form-control mr-sm-2 " placeholder="Ara">

                                        </form>
                                    </nav>


                                    <div class="content table-responsive table-full-width">

                                        <table id="sample-table">
                                            <thead>
                                                <tr>
                                                    <th>title-1</th>
                                                    <th>title-2</th>
                                                    <th>title-3</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>data-1</td>
                                                    <td>data-2</td>
                                                    <td>data-3</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-hover table-striped" id="users-table">

                                            <thead>
                                                <tr class="side-bar" id="tableHeader">
                                                    <th>ID </th>
                                                    <th>E-POSTA </th>
                                                    <th>YETKİ </th>
                                                    <th>YÖNET</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql = "SELECT * FROM members ORDER BY access DESC";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr>';
                                                echo "<td>" . $row["id"] . "</td>";
                                                echo "<td>" . $row["email"] . "</td>";
                                                if ($row["access"] == "1") {
                                                    echo "<td>Yönetici</td>";
                                                } else {
                                                    echo "<td>Üye</td>";
                                                }
                                                echo "<td><a href=../admin/member.php#id=" . $row["id"] . "&email=" . $row["email"] . "&access=" . $row["access"] . "><i class='pe-7s-config' style='font-size:20px;' ></i></a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        $conn->close();
                                            ?>
                                            </tbody>
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

    <!-- SWAL -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.bootstrap4.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/autoFill.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    
    
    <script>
        function searchTable() {
            var input, filter, found, table, tr, td, i, j;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("users-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                    found = false;
                } else {
                    if (tr[i].id != 'tableHeader') {
                        tr[i].style.display = "none";
                    }

                }
            }
        }
    </script>
    <script type="text/javascript">
        //ADD MEMBER
        $(document).ready(function() {
            $('#add').on('click', function() {
                window.location.href = "add.php";
            });
        });
    </script>
    <script>
        //DATATABLES
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
    </script>


    </html>