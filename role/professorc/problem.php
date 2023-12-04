<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "../../config/config.php";



    if (isset($_POST['submit'])) {

        $id = $_POST['id'];

        $report = $_POST['report'];
        
        $problem = $_POST['problem'];



        $sql = $conn->prepare("UPDATE users SET report = :report,  problem = :problem WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":report", $report);

        $sql->bindParam(":problem", $problem);

        $sql->execute();



        if ($sql) {

            $_SESSION['success'] = "อัพเดทข้อมูลสำเร็จ";

            header("location: complete.php");

        } else {

            $_SESSION['error'] = "มีบางอย่างผิดปกติ อัพเดทไม่สำเร็จ";

            header("location: complete.php");

        }

    }



?>

