<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once "../config/config.php";

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];

        $statuss = 'offline';



        $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":statuss", $statuss);

        $sql->execute();



        if ($sql) {
            
            unset($_SESSION['admin_login']);
            unset($_SESSION['student_login']);
            unset($_SESSION['professor_login']);
            unset($_SESSION['professorc_login']);
            unset($_SESSION['complete_login']);
          
            $_SESSION['successl'] = 'ออกจากระบบสำเร็จ';

            header("location: ../index.php");
        } else {

            unset($_SESSION['admin_login']);
            unset($_SESSION['student_login']);
            unset($_SESSION['professor_login']);
            unset($_SESSION['professorc_login']);
            unset($_SESSION['complete_login']);
            
            $_SESSION['successl'] = 'ออกจากระบบสำเร็จ';

            header("location: ../index.php");

        }

    }

?>