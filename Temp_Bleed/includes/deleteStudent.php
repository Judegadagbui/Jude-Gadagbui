<?php


    include_once 'dbh.php';
if (isset($_GET['pn'])) {

    $pn = $_GET['pn'];

    $query = mysqli_query($conn, "SELECT * FROM students WHERE p_name = '$pn'");

    if (mysqli_num_rows($query) > 0) {

        $query = mysqli_query($conn, "DELETE FROM students WHERE p_name = '$pn'");
        header('Location: ../index.php');
    }
}