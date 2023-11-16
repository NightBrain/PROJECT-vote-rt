<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

    if (!isset($_SESSION['student_login'])) {

      $_SESSION['errorstu'] = 'กรุณาเข้าสู่ระบบ!';

      header("location: ../index.php");

  }

?>
                <?php if(isset($_SESSION['successstu'])) { ?>
                    <?php 
                        echo "<script>
                        $(document).ready(function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Student',
                                text: 'Chiang Mai Rajabhat University',
                                  timer: 3000,
                                  timerProgressBar: true,
                              });
                        });
                    </script>";
                        
                        unset($_SESSION['successstu']);
                    ?>
                <?php } ?>

                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="professor/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="professor/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	
	<!-- Style css -->
    <link href="professor/css/style.css" rel="stylesheet">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .form__input {
            font-family: 'Roboto', sans-serif;
            color: #333;
            font-size: 1.2rem;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            border-radius: 0.2rem;
            background-color: #F7F7F7;
            border: none;
            width: 40%;
            display: block;
            border-bottom: 0.3rem solid transparent;
            transition: all 0.3s;
            font-size: 22px;
            
            }
    </style>
    
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="border-bottom">
            <div class="content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $admin_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
							<div class="dashboard_bar mx-5">
                                VOTE-RT
                            </div>
                        </div>
                        <ul class="navbar-nav header-right ">
							
							
							<li class="nav-item dropdown  header-profile mt-1 mb-1">
                            <h3><b>ชื่อ :</b>  <?php echo $row['firstname'] ?> <b>สกุล : </b><?php echo $row['lastname'] ?></h3>
								<a class="nav-link" href="" role="button" data-bs-toggle="dropdown">
									<img src="../img/logo.gif" width="56" alt="">
								</a>
                                <h3 class="dashboard_bar mx-3">
                                <b>CMRU.</b> 
                                </h3>
								
							</li>
                            <div class="mx-5"></div>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="mt-3 mx-5">
            <!-- row -->
			<div class="container-fulid ">
				<div class="row">
					<div class="col-xl" >
						<div class="row">
							<div class="col-xl">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body" style="border-radius: 25px; border: 2px solid #fff ; background-color: #fff;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
												
                                            <div class=" text-center mt-1 mx-5">
                                                            <div class="row">
                                                            <div class="col mx-5" style="border-radius: 25px; border: 2px solid #f7f7f7 ; background-color: #f7f7f7; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                                                <h1><b>No.1</b></h1>
                                                                <h4><p>พรรค...</p></h4>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title" id="exampleModalLabel"><b>No.1</b></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        <h2>พรรค...</h2>
                                                                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-50 p-3">
                                                                        <form class="form-detail" action="vote/vote01.php" method="post">
                                                                            <div class="form-group">
                                                                            <?php 

                                                                                if (isset($_SESSION['student_login'])) {

                                                                                    $student_id = $_SESSION['student_login'];

                                                                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                                                                    $stmt->execute();

                                                                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                }

                                                                            ?> 
                                                                            <input style="display: none;"  type="text" readonly value="หมายเลข 1" required class="form-control" name="number">
                                                                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                            <hr>
                                                                           
                                                                            <div class="row">
                                                                                <div class="col mx-4" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                รหัสนักศึกษาของท่านคือ : <input type="text" readonly value="<?php echo $row['studentid'] ?>" class="form__input" name="ids" >
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            </div> 

                                                                            <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <p style='color:#ff0000; font-size: 16px;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาตรวจสอบให้แน่ใจว่านี่เป็นหมายเลขที่ท่านจะเลือก <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                        
                                                                        </div>
                                                                        </form> 
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail" width="80%"style='box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                                                                    <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                </div>
                                                            </div>

                                                            <div class="col mx-5" style="border-radius: 25px; border: 2px solid #f7f7f7 ; background-color: #f7f7f7;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                                            <h1><b>No.2</b></h1>
                                                            <h4><p>พรรค...</p></h4>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title" id="exampleModalLabel"><b>No.2</b></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        <h2>พรรค...</h2>
                                                                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-50 p-3">
                                                                        <form class="form-detail" action="vote/vote02.php" method="post">
                                                                            <div class="form-group">
                                                                            <?php 

                                                                                if (isset($_SESSION['student_login'])) {

                                                                                    $student_id = $_SESSION['student_login'];

                                                                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                                                                    $stmt->execute();

                                                                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                }

                                                                            ?> 
                                                                            <input style="display: none;"  type="text" readonly value="หมายเลข 2" required class="form-control" name="number">
                                                                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                            <hr>
                                                                           
                                                                            
                                                                            <div class="row">
                                                                                <div class="col mx-4" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                รหัสนักศึกษาของท่านคือ : <input type="text" readonly value="<?php echo $row['studentid'] ?>" class="form__input" name="ids" >
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            </div> 

                                                                            <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <p style='color:#ff0000; font-size: 16px;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาตรวจสอบให้แน่ใจว่านี่เป็นหมายเลขที่ท่านจะเลือก <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                        
                                                                        </div>
                                                                        </form> 
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail" width="80%"style='box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                                                                    <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><h1><i class='bx bx-x-circle'style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                </div>
                                                            </div>
                                                            <div class="col mx-5" style="border-radius: 25px; border: 2px solid #f7f7f7 ; background-color: #f7f7f7;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                                            <h1><b>No.3</b></h1>
                                                            <h4><p>พรรค...</p></h4>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title" id="exampleModalLabel"><b>No.3</b></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        <h2>พรรค...</h2>
                                                                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-50 p-3">
                                                                        <form class="form-detail" action="vote/vote03.php" method="post">
                                                                            <div class="form-group">
                                                                            <?php 

                                                                                if (isset($_SESSION['student_login'])) {

                                                                                    $student_id = $_SESSION['student_login'];

                                                                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                                                                    $stmt->execute();

                                                                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                }

                                                                            ?> 
                                                                            <input style="display: none;"  type="text" readonly value="หมายเลข 3" required class="form-control" name="number">
                                                                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                            <hr>
                                                                           
                                                                            
                                                                            <div class="row">
                                                                                <div class="col mx-4" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                รหัสนักศึกษาของท่านคือ : <input type="text" readonly value="<?php echo $row['studentid'] ?>" class="form__input" name="ids" >
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            </div> 

                                                                            <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <p style='color:#ff0000; font-size: 16px;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาตรวจสอบให้แน่ใจว่านี่เป็นหมายเลขที่ท่านจะเลือก <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                        
                                                                        </div>
                                                                        </form> 
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            <div class="text-center">
                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail" width="80%"style='box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                                                                <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><h1><i class='bx bx-x-circle'style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                            </div>
                                                            </div>
                                                            <div class="col mx-5" style="border-radius: 25px; border: 2px solid #f7f7f7 ; background-color: #f7f7f7;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                                            <h1><b>No.4</b></h1>
                                                            <h4><p>พรรค...</p></h4>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title" id="exampleModalLabel"><b>No.4</b></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        <h2>พรรค...</h2>
                                                                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-50 p-3">
                                                                        <form class="form-detail" action="vote/vote04.php" method="post">
                                                                            <div class="form-group">
                                                                            <?php 

                                                                                if (isset($_SESSION['student_login'])) {

                                                                                    $student_id = $_SESSION['student_login'];

                                                                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                                                                    $stmt->execute();

                                                                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                }

                                                                            ?> 
                                                                            <input style="display: none;"  type="text" readonly value="หมายเลข 4" required class="form-control" name="number">
                                                                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                            <hr>
                                                                           
                                                                            
                                                                            <div class="row">
                                                                                <div class="col mx-4" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                รหัสนักศึกษาของท่านคือ : <input type="text" readonly value="<?php echo $row['studentid'] ?>" class="form__input" name="ids" >
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            </div> 

                                                                            <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <p style='color:#ff0000; font-size: 16px;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาตรวจสอบให้แน่ใจว่านี่เป็นหมายเลขที่ท่านจะเลือก <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                        
                                                                        </div>
                                                                        </form> 
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            <div class="text-center">
                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail" width="80%"style='box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                                                                <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><h1><i class='bx bx-x-circle'style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                            <div class="container-fulid text-center mt-5 mx-4" style="border-radius: 25px; border: 2px solid #f7f7f7 ; background-color: #f7f7f7;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                                            <div class="row">
                                                            <div class="col justify-content-center">
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h1 class="modal-title" id="exampleModalLabel"><b>ไม่ประสงค์ลงคะแนน</b></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        
                                                                        <form class="form-detail" action="vote/votenone.php" method="post">
                                                                            <div class="form-group">
                                                                            <?php 

                                                                                if (isset($_SESSION['student_login'])) {

                                                                                    $student_id = $_SESSION['student_login'];

                                                                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                                                                    $stmt->execute();

                                                                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                }

                                                                            ?> 
                                                                            <input style="display: none;"  type="text" readonly value="ไม่ประสงค์ลงคะแนน" required class="form-control" name="number">
                                                                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                            <hr>
                                                                           
                                                                            
                                                                            <div class="row">
                                                                                <div class="col mx-4" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                รหัสนักศึกษาของท่านคือ : <input type="text" readonly value="<?php echo $row['studentid'] ?>" class="form__input" name="ids" >
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            </div> 

                                                                            <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bx-x-circle' style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <p style='color:#ff0000; font-size: 16px;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาตรวจสอบให้แน่ใจว่านี่เป็นหมายเลขที่ท่านจะเลือก <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                        
                                                                        </div>
                                                                        </form> 
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                    <h1><b>ไม่ประสงค์ลงคะแนน</b></h1>
                                                                    <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal5"><h1><i class='bx bx-x-circle'style='color:#ffffff'></i></h1><h4 style='color:#ffffff'>ลงคะแนน</h4></button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                            
                                            </div>	
                                        </div>
							        </div>
						        </div>
					        </div>
				        </div>
                    </div>
                </div>
            </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="text-center">
                <div class="copyright mt-1">
                    <p>Copyright ©2023 VoteRealTime. All rights reserved Developed by <a href="https://github.com/NightBrain" target="_blank">@NightBrain</a></p>
                </div>
        </div>
        
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="professor/vendor/global/global.min.js"></script>
	<script src="professor/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="professor/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="professor/vendor/apexchart/apexchart.js"></script>
	
	<script src="professor/vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="professor/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="professor/js/dashboard/dashboard-1.js"></script>
	
	<script src="professor/vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="professor/js/custom.min.js"></script>
	<script src="professor/js/dlabnav-init.js"></script>
	<script src="professor/js/demo.js"></script>

	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>
