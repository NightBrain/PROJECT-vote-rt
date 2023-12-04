<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once 'config/config.php';

    $stmt = $conn->query("SELECT * FROM users");
    
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

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

                            if ($row['urole'] == 'admin') {

                                $_SESSION['admin_login'] = $row['id'];

                                $_SESSION['successsa'] = 'ยินดีต้อนรับ';
                            
                            
                                if (isset($_POST['signin'])) {
                            
                                    $id = $row['id'];
                            
                                    $statuss = 'online';
                            
                            
                            
                                    $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
                            
                                    $sql->bindParam(":id", $id);
                            
                                    $sql->bindParam(":statuss", $statuss);
                            
                                    $sql->execute();
                            
                            
                            
                                    if ($sql) {
                            
                                        header("location: role/admin.php");
                            
                                    } else {
                            
                                        $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";
                            
                                        header("location: index.php");
                            
                                    }
                            
                                }
                    

                        //<=============================================================>
    
                            } else  if ($row['urole'] == 'professor') {

                                $_SESSION['professor_login'] = $row['id'];

                                $_SESSION['successpa'] = 'ยินดีต้อนรับ';
                            
                                if (isset($_POST['signin'])) {
                            
                                    $id = $row['id'];
                            
                                    $statuss = 'online';
                            
                            
                            
                                    $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
                            
                                    $sql->bindParam(":id", $id);
                            
                                    $sql->bindParam(":statuss", $statuss);
                            
                                    $sql->execute();
                            
                            
                            
                                    if ($sql) {
                            
                                        header("location: role/professor/professor.php");
                            
                                    } else {
                            
                                        $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";
                            
                                        header("location: index.php");
                            
                                    }
                            
                                }
                    

                        //<=============================================================>

                            } else  if ($row['urole'] == 'professor_c') {

                                $_SESSION['professorc_login'] = $row['id'];

                                $_SESSION['successp'] = 'ยินดีต้อนรับ';

                                if (isset($_POST['signin'])) {
                            
                                    $id = $row['id'];
                            
                                    $statuss = 'online';
                            
                            
                            
                                    $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
                            
                                    $sql->bindParam(":id", $id);
                            
                                    $sql->bindParam(":statuss", $statuss);
                            
                                    $sql->execute();
                            
                            
                            
                                    if ($sql) {
                            
                                        header("location: role/professorc/professor.php");
                            
                                    } else {
                            
                                        $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";
                            
                                        header("location: index.php");
                            
                                    }
                            
                                }

                        //<=============================================================>
    
                            } else  if ($row['urole'] == 'student') {

                                $_SESSION['student_login'] = $row['id'];

                                $_SESSION['successstu'] = 'ยินดีต้อนรับ';

                                if (isset($_POST['signin'])) {
                            
                                    $id = $row['id'];
                            
                                    $statuss = 'online';
                            
                            
                            
                                    $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
                            
                                    $sql->bindParam(":id", $id);
                            
                                    $sql->bindParam(":statuss", $statuss);
                            
                                    $sql->execute();
                            
                            
                            
                                    if ($sql) {
                            
                                        header("location: role/student.php");
                            
                                    } else {
                            
                                        $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";
                            
                                        header("location: index.php");
                            
                                    }
                            
                                }
                    
                        //<=============================================================>

    
                            } else {

                                $_SESSION['complete_login'] = $row['id'];

                                $_SESSION['successc'] = 'ยินดีต้อนรับ';

                                if (isset($_POST['signin'])) {
                            
                                    $id = $row['id'];
                            
                                    $statuss = 'online';
                            
                            
                            
                                    $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
                            
                                    $sql->bindParam(":id", $id);
                            
                                    $sql->bindParam(":statuss", $statuss);
                            
                                    $sql->execute();
                            
                            
                            
                                    if ($sql) {
                            
                                        header("location: role/complete.php");
                            
                                    } else {
                            
                                        $_SESSION['errorr'] = "มีบางอย่างผิดปกติ";
                            
                                        header("location: index.php");
                            
                                    }
                            
                                }

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