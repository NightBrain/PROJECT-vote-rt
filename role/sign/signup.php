<?php 



    session_start();

    require_once 'conn/db.php';



?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGNUP ADOPT</title>

    <script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font-->

	<link rel="stylesheet" type="text/css" href="css1/nunito-font.css">

	<!-- Main Style Css -->

    <link rel="stylesheet" href="css1/style.css"/>

    <link rel="stylesheet" href="ss.css"/>

    <link rel="stylesheet" href="../app.css"/>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- Loding font -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->

    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bgg navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">

        <a href="index.php" class="navbar-brand ms-lg-5">

            <h1 class="m-0 text-uppercase c"><i class="fa-solid fa-paw"></i> SAVE DOG&CAT</h1>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto py-0">

                <a href="../index.html" class="nav-item nav-link ">Home</a>

                <a href="../Donate.html" class="nav-item nav-link">Donate</a>

                <a href="../contact.html" class="nav-item nav-link">Contact</a>

          

                <a href="index.php" class="nav-item nav-link nav-contact bg text-white px-5 ms-lg-5">Adopt <i class="bi bi-arrow-right"></i></a>

            </div>

        </div>

    </nav>

    <!-- Navbar End -->

            <div class="form-v9">

                <div class="page-content">

                    <div class="form-v9-content" style="background-image: url('images/form-v11.jpg')">

                        <form class="form-detail" action="signup_db.php" method="post">

                        <?php if(isset($_SESSION['error'])) { ?>

                            <div class="alert alert-danger" role="alert">

                                <?php 

                                    echo $_SESSION['error'];

                                    unset($_SESSION['error']);

                                ?>

                            </div>

                        <?php } ?>

                        <?php if(isset($_SESSION['success'])) { ?>

                            <div class="alert alert-success" role="alert">

                                <?php 

                                    echo $_SESSION['success'];

                                    unset($_SESSION['success']);

                                ?>

                            </div>

                        <?php } ?>

                        <?php if(isset($_SESSION['warning'])) { ?>

                            <div class="alert alert-warning" role="alert">

                                <?php 

                                    echo $_SESSION['warning'];

                                    unset($_SESSION['warning']);

                                ?>

                            </div>

                        <?php } ?>

                            <h2 style="color: #fff;">Registration</h2>

                            <div class="form-row-total">

                                <div class="form-row">

                                    <input type="text" name="firstname"  class="input-text" placeholder="First name" required>

                                </div>

                                <div class="form-row">

                                    <input type="text" name="lastname"  class="input-text" placeholder="Last name" required>

                                </div>

                            </div>

                            <div class="form-row-total">

                                <div class="form-rowip">

                                    <input type="text" name="email"  class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">

                                </div>

                            </div>

                            <div class="form-row-total">

                                <div class="form-row">

                                    <input type="password" name="password"  class="input-text" placeholder="Password" required>

                                </div>

                                <div class="form-row">

                                    <input type="password" name="c_password"  class="input-text" placeholder="Comfirm Password" required>

                            </div>

                            </div>

                            <div class="form-row-last">

                                <button type="submit" class="btttn f" name="signup"><b>Register</b></button>

                            </div>

                        </form>

                        <hr>

                        <center>

                            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a class="fgg" href="index.php">เข้าสู่ระบบ</a></p>

                        </center>

                    </div>

                </div>

            </div>

    

</body>

</html>

