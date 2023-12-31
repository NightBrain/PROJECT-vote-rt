<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

	if (!isset($_SESSION['complete_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../index.php");

    }

?>
                <?php if(isset($_SESSION['successcom'])) { ?>
                    <?php 
                        echo "<script>
                        $(document).ready(function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome',
                                text: 'Chiang Mai Rajabhat University',
                                  timer: 3000,
                                  timerProgressBar: true,
                              });
                        });
                    </script>";
                        
                        unset($_SESSION['successcom']);
                    ?>
                <?php } ?>


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
	<link rel="icon" type="image/png" href="../img/logov.png">
	<link href="professor/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="professor/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	
	<!-- Style css -->
    <link href="professor/css/style.css" rel="stylesheet">
    <link href="../button.css" rel="stylesheet">

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
            body, html {
                    height: 100%;
                    margin: 0;
                    }
                    .bg {
                    /* The image used */
                    background-image: url("../img/bg.jpg");

                    /* Full height */
                    height: 100%; 

                    /* Center and scale the image nicely */
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    }
    </style>
    
	
</head>
<body>
    <div class="bg">
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

                            if (isset($_SESSION['complete_login'])) {

                                $admin_id = $_SESSION['complete_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
							<div class="dashboard_bar mx-5" style='color:#fff'>
                                VOTE-RT
                            </div>
                        </div>
                        <ul class="navbar-nav header-right ">
							
							
							<li class="nav-item dropdown  header-profile mt-1 mb-1">
                            <h3 style='color:rgb(58, 58, 58)'><b style='color:#000'>ชื่อ :</b>  <?php echo $row['firstname'] ?> <b style='color:#000'>สกุล : </b><?php echo $row['lastname'] ?></h3>
								<a class="nav-link" href="" role="button" data-bs-toggle="dropdown">
									<img src="../img/logo.gif" width="56" alt="">
								</a>
                
                    <h3 class="dashboard_bar mx-3">
                    <b style='color:#fff'>CMRU.</b> 
                    </h3>
                    <a class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class='bx bxs-info-circle' style='color:#fff'></i></h1></a>
                    
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h3 class="modal-title" id="exampleModalLabel"><b>Report Problem</b></h3>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-bodymb-1">
                                                                        <form class="form-detail" action="problem.php" method="post">
                                                                            <div class="form-group my-3">
                                                                                <?php 

                                                                                    if (isset($_SESSION['complete_login'])) {

                                                                                        $professor_id = $_SESSION['complete_login'];

                                                                                        $stmt = $conn->query("SELECT * FROM users WHERE id = $professor_id");

                                                                                        $stmt->execute();

                                                                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                                    }

                                                                                ?> 
                                                                                <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                                <input style="display: none;"  type="text" readonly value="กำลังรอดำเนินการ..." required class="form-control" name="report">
                                                                                <div class="row">
                                                                                    <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 18px;'>
                                                                                    <textarea name="problem" style="border-radius: 25px; padding: 15px;" rows="4" cols="40" required placeholder="problem"></textarea>
                                                                                    </div>   
                                                                                    <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 22px;'>
                                                                                    <button type="submit"  name="submit" class="buttonn mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal1" style='color:#ffffff; font-weight: bold; font-size: 22px;'><b>Report</b></button>
                                                                                    </div>    
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                            <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 15px;'>     
                                                                            <p style='color:#ff0000;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาอย่ารายงานเล่น [ ถ้าจับได้จะโดนตัดสิทธิ์ถาวร ] <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
                                                                            </div> 
                                                                           
                                                                            </div>
                                                                        </form> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                    <form class="form-detail" action="logout.php" method="post">
                           
                                        <?php 

                                            if (isset($_SESSION['complete_login'])) {

                                                $admin_id = $_SESSION['complete_login'];

                                                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

                                                $stmt->execute();

                                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                            }

                                        ?> 
                                        <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                                 
                                        <span class="ml-2"><button type="submit"  name="submit" class="btn btn-danger bttn mt-3"><h4 style='color:#ffffff'>Logout </h4></button></span>
                                        </form>
								
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
        <div class="mt-5 mx-5" >
            <!-- row -->
			<div class="container">
				<div class="row">
								<div class="row">
									<div class="col-xl-12">
										<div class="container" style="margin-top: 90px;">
											<div class="card-body" style="border-radius: 25px; background-color: rgba(255, 255, 255, 0.665);box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; height: 500px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 30px;">
                                    <?php 

                                    if (isset($_SESSION['complete_login'])) {

                                            $complete_id = $_SESSION['complete_login'];

                                            $stmt = $conn->query("SELECT * FROM users WHERE id = $complete_id");

                                            $stmt->execute();

                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                            }

                                        ?>
                                        <div class="container text-center" style='color:rgb(91, 91, 91)'>
                                            <p>คุณเลือกโหวต <?php echo $row['number'] ?></p>   
                                            <p><?php echo $row['report'] ?></p>   
                                            <div style=" display: flex; justify-content: center; align-items: center; color:#ffffff;">
                                                    <p class="icon"><i class='bx bx-line-chart bx-flashing' style='color:#ffffff;  font-size: 20px;' ></i></p>
                                                    <a href="../score.php" class="buttonn" >  &nbsp; &nbsp; &nbsp;ผลคะแนนแบบเรียลไทม์</a>
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
        <div class="text-center mt-2">
                <div class="copyright">
                    <p style='color: #fff'>Copyright ©2023 VoteRealTime. All rights reserved Developed by <a href="https://github.com/NightBrain" target="_blank" style='color: #ff8300'>@NightBrain</a></p>
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
    </div>
    

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
