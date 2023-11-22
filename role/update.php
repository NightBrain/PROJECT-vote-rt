<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "../config/config.php";



    if (isset($_POST['update'])) {

        $id = $_POST['id'];

        $name = $_POST['name'];

        $img = $_FILES['img'];



        $img2 = $_POST['img2'];

        $upload = $_FILES['img']['name'];



        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');

            $extension = explode(".", $img['name']);

            $fileActExt = strtolower(end($extension));

            $fileNew = rand() . "." . $fileActExt;

            $filePath = "uploads/".$fileNew;



            if (in_array($fileActExt, $allow)) {

                if ($img['size'] > 0 && $img['error'] == 0) {

                    move_uploaded_file($img['tmp_name'], $filePath);

                }

            }

        } else {

            $fileNew = $img2;

        }



        $sql = $conn->prepare("UPDATE vnumber SET name = :name,  img = :img WHERE id = :id");

        $sql->bindParam(":id", $id);

        $sql->bindParam(":name", $name);

        $sql->bindParam(":img", $fileNew);

        $sql->execute();



        if ($sql) {

            $_SESSION['success'] = "อัพเดทข้อมูลสำเร็จ";

            header("location: edit.php");

        } else {

            $_SESSION['error'] = "มีบางอย่างผิดปกติ อัพเดทไม่สำเร็จ";

            header("location: edit.php");

        }

    }



?>

