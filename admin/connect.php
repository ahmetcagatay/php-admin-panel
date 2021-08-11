<?php

function run_query($sql)
{
    // Connect Database
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "app";
    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo $conn->connect_error;
    }

    $result = $conn->query($sql);
    if (!$result) {
        echo $conn->error;
    } else {
        echo $result;
    }

    $conn->close();
}

function select_query($sql)
{
    // Connect Database
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "app";
    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo $conn->connect_error;
    }

    $result = $conn->query($sql);
    if (!$result) {
        echo $conn->error;
    } else {
        $email = $_GET["email"];
        $sql = "SELECT * FROM members WHERE email='$email'";
        $result = $conn->query($sql);
        echo $result->num_rows;
    }

    $conn->close();
}
