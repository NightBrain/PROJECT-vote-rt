<?php 



    session_start();

    require_once 'config/config.php';



    if (isset($_POST['submit'])) {

        $firstname =  'problem';

        $lastname = 'problem';

        $studentid = 'problem';

        $branch = 'problem';

        $password = 'problem';

        $number = 'problem';

        $urole = 'problem';
        
        $statuss = 'problem';

        $report = $_POST['report'];
        
        $problem = $_POST['problem'];



       

       

            try {

                if (!isset($_SESSION['error'])) {

                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, branch, studentid, password, report, problem, number, statuss, urole) 

                                            VALUES(:firstname, :lastname, :branch, :studentid, :password, :report, :problem, :number, :statuss, :urole)");

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

                    $stmt->execute();

                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว!";

                    header("location: index.php");

                } else {

                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";

                    header("location: indexx.php");

                }



            } catch(PDOException $e) {

                echo $e->getMessage();

            }

        

    }





?>