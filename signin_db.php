<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once 'config/config.php';


    if (isset($_POST['signin'])) {

        $studentid = $_POST['studentid'];

        $password = $_POST['password'];

        

        if (empty($studentid)) {

            $_SESSION['errors'] = 'กรุณากรอกรหัสนักศึกษา';

            header("location: index.php");

        } else if (empty($password)) {

            $_SESSION['errorp'] = 'กรุณากรอกรหัส';

            header("location: index.php");

        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {

            $_SESSION['errorpw'] = 'กรุณากรอกรหัสให้ถูกต้อง';
                
            header("location: index.php");

        } else {

            try {

                $check_data = $conn->prepare("SELECT * FROM users WHERE studentid = :studentid");

                $check_data->bindParam(":studentid", $studentid);

                $check_data->execute();

                $row = $check_data->fetch(PDO::FETCH_ASSOC);



                if ($check_data->rowCount() > 0) {



                    if ($studentid == $row['studentid']) {

                        if (password_verify($password, $row['password'])) {

                            if ($row['urole'] == 'super_admin') {

                                $_SESSION['super_admin_login'] = $row['id'];

                                $_SESSION['successsa'] = 'ยินดีต้อนรับ';
                    
                                header("location: role/admin.php");

                        //<=============================================================>
    
                            } else  if ($row['urole'] == 'professor_admin') {

                                $_SESSION['professor_admin_login'] = $row['id'];

                                $_SESSION['successpa'] = 'ยินดีต้อนรับ';
                    
                                header("location: role/professor/admin_pro.php");

                        //<=============================================================>

                            } else  if ($row['urole'] == 'professor') {

                                $_SESSION['professor_login'] = $row['id'];

                                $_SESSION['successp'] = 'ยินดีต้อนรับ';
                    
                                header("location: role/professor/professor_vote.php");

                        //<=============================================================>
    
                            } else  if ($row['urole'] == 'student') {

                                $_SESSION['student_login'] = $row['id'];

                                $_SESSION['successstu'] = 'ยินดีต้อนรับ';
                    
                                header("location: role/student.php");

                        //<=============================================================>

    
                            } else {

                                $_SESSION['complete_login'] = $row['id'];

                                $_SESSION['successc'] = 'ยินดีต้อนรับ';
                    
                                header("location: role/complete.php");

                            }

                        } else {

                            $_SESSION['errorpin'] = 'กรุณากรอกรหัสให้ถูกต้อง';
                
                            header("location: index.php");

                        }

                    } 

                } else {

                    $_SESSION['errornone'] = 'ไม่มีข้อมูลในระบบ';
            
                        header("location: index.php");

                }



            } catch(PDOException $e) {

                echo $e->getMessage();

            }

        }

    }

?>