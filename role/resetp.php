<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "../config/config.php";


    if (isset($_POST['submitt'])) {

        $id = $_POST['id'];

        $urole = 'professor';



        $sql = $conn->prepare("UPDATE users SET urole = :urole WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":urole", $urole);

        $sql->execute();



        if ($sql) {

            $_SESSION['successr'] = "เพิ่มข้อมูลสำเร็จ";

            header("location: infoprofessor.php");

        } else {

            $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";

            header("location: infoprofessor.php");

        }

    }
?>
