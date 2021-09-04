<?php
     include "partials/_dbconnect.php";
    $bid = $_GET['threadid'];
    $sql = "DELETE FROM `updatebudget` WHERE thread_id = '$bid'";
    $result = mysqli_query($conn,$sql);
    $sql = "DELETE FROM `personsdata` WHERE thread_id = '$bid'";
    $result = mysqli_query($conn,$sql);
    $sql = "DELETE FROM `budgets` WHERE bid = '$bid'";
    $result = mysqli_query($conn,$sql);
    header("Location:/ctrlbudget/thread.php");



?>
