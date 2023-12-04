<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 



    session_start();

    require_once "../../config/config.php";



    if (isset($_POST['submit'])) {

        $ids = $_POST['ids'];


        $sql = $conn->prepare("INSERT INTO vote01(ids) VALUES(:ids)");

        $sql->bindParam(":ids", $ids);

        $sql->execute();

    }

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];

        $number = $_POST['number'];

        $urole = 'complete_s';

        $statuss = 'offline';


        $sql = $conn->prepare("UPDATE users SET urole = :urole, statuss = :statuss, number = :number WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":number", $number);

        $sql->bindParam(":urole", $urole);

        $sql->bindParam(":statuss", $statuss);

        $sql->execute();



        if ($sql) {

            unset($_SESSION['admin_login']);
                    unset($_SESSION['student_login']);
                    unset($_SESSION['professor_login']);
                    unset($_SESSION['professorc_login']);
                    unset($_SESSION['complete_login']);
                  
                    $_SESSION['success01'] = "เพิ่มข้อมูลสำเร็จ";
        
                    header("location: ../../index.php");

        } else {
            unset($_SESSION['admin_login']);
            unset($_SESSION['student_login']);
            unset($_SESSION['professor_login']);
            unset($_SESSION['professorc_login']);
            unset($_SESSION['complete_login']);

            $_SESSION['errorv'] = "มีบางอย่างผิดปกติ";

            header("location: ../../index.php");

        }

    }

?>

