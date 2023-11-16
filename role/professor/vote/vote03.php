<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "../../../config/config.php";



    if (isset($_POST['submit'])) {

        $ids = $_POST['ids'];


        $sql = $conn->prepare("INSERT INTO vote03(ids) VALUES(:ids)");

        $sql->bindParam(":ids", $ids);

        $sql->execute();

    }

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];

        $number = $_POST['number'];

        $urole = 'complete_p';



        $sql = $conn->prepare("UPDATE users SET urole = :urole, number = :number WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":number", $number);

        $sql->bindParam(":urole", $urole);

        $sql->execute();


        if ($sql) {

            $_SESSION['success03'] = "เพิ่มข้อมูลสำเร็จ";

            header("location: logoutp.php");

        } else {

            $_SESSION['errorv'] = "มีบางอย่างผิดปกติ";

            header("location: ../../logout.php");

        }

    }
?>

