<?php 



    session_start();

    require_once '../../config/config.php';



    if (isset($_POST['signup'])) {

        $firstname = $_POST['firstname'];

        $lastname = $_POST['lastname'];

        $studentid = $_POST['studentid'];

        $branch = $_POST['branch'];

        $password = $_POST['password'];

        $c_password = $_POST['c_password'];

        $urole = 'professor';

        $regby = $_POST['regby'];

        $number = '-';
        
        $statuss = '-';

        $report = '-';
        
        $problem = '-';



       

        if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {

            $_SESSION['errorpc'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';

            header("location: ../reg_p.php");

        } else if ($password != $c_password) {

            $_SESSION['errornm'] = 'รหัสผ่านไม่ตรงกัน';

            header("location: ../reg_p.php");

        } else {

            try {



                $check_studentid = $conn->prepare("SELECT studentid FROM users WHERE studentid = :studentid");

                $check_studentid->bindParam(":studentid", $studentid);

                $check_studentid->execute();

                $row = $check_studentid->fetch(PDO::FETCH_ASSOC);



                if ($row['studentid'] == $studentid) {

                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='index.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";

                    header("location: ../reg_p.php");

                } else if (!isset($_SESSION['error'])) {

                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, branch, studentid, password, report, problem, number, statuss, urole, regby) 

                                            VALUES(:firstname, :lastname, :branch, :studentid, :password, :report, :problem, :number, :statuss, :urole, :regby)");

                    $stmt->bindParam(":firstname", $firstname);

                    $stmt->bindParam(":lastname", $lastname);

                    $stmt->bindParam(":studentid", $studentid);

                    $stmt->bindParam(":branch", $branch);

                    $stmt->bindParam(":report", $report);
                    
                    $stmt->bindParam(":problem", $problem);

                    $stmt->bindParam(":number", $number);

                    $stmt->bindParam(":statuss", $statuss);

                    $stmt->bindParam(":password", $passwordHash);

                    $stmt->bindParam(":urole", $urole);

                    $stmt->bindParam(":regby", $regby);

                    $stmt->execute();

                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว!";

                    header("location: ../reg_p.php");

                } else {

                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";

                    header("location: ../reg_p.php");

                }



            } catch(PDOException $e) {

                echo $e->getMessage();

            }

        }

    }





?>