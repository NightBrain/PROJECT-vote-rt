<?php 
session_start();
error_reporting(0);

    $con = mysqli_connect('localhost', 'root', 'root', 'vote-rt');

    if ($con) {
        // echo "Connect success";
    } else {
        echo "Failed to connect " . mysqli_connect_error();
    }

    if (isset($_POST['stud_delete_multiple_btn'])) {
        if (count($_POST['stud_delete_id']) > 0) {
            $all = implode(",", $_POST['stud_delete_id']);
            $sql = mysqli_query($con, "DELETE FROM vote02 WHERE id in ($all)");
            if ($sql) {
                header("Location: no1.php");

            } else {
                header("Location: no.php");
            }
        } else {
            header("Location: no.php");
        }
    }
?>