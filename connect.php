<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee_data";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
       die("". $conn->connect_error);
    }
?>