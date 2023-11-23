<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../../config/config.php';

	if (!isset($_SESSION['professor_admin_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../../index.php");

    }

?>
<?php if(isset($_SESSION['successpro'])) { ?>
	<?php 
		echo "<script>
		$(document).ready(function() {
			Swal.fire({
				icon: 'success',
				title: 'Welcome Professor',
				text: 'Chiang Mai Rajabhat University',
				  timer: 1000,
				  timerProgressBar: true,
			  });
		});
	</script>";
		
		unset($_SESSION['successpro']);
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
	<title>Register Student</title>
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/png" href="../../img/logov.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
<!--===============================================================================================-->
	
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

		<?php include 'nav.php';?>
		<?php include '../alertr.php';?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl">
						<div class="row">
							<div class="col-xl">
                            <h4 class="fs-25 font-w700 mb-2">Register Student</h4><br>
								<div class="row rounded-5">
									
									<div class="col-xl-12 ">
										<div class="card ">
											<div class="card-header border-0 flex-wrap">
												
												<div class="d-flex align-items-center project-tab mb-2">	
													
												</div>	
											</div>
											<div class="card-body">
												
                                            <div class="row ">
                                                    <div class="col-xl col-xxl ">
                                                        <div class="card">
                                                        <div class="limiter">
                                                                <div class="container mb-5">
                                                                    <div class="wrap">
                                                                        <form class="login100-form validate-form" action="../sign/signup_db_stu.php" method="post">
                                                                            <span class="login100-form-logo">
                                                                            <i class='bx bxs-user-plus' style='color:#f0f0f0f' ></i>
                                                                            </span>

                                                                            <span class="login100-form-title p-b-34 p-t-27">
                                                                                Register
                                                                            </span>

                                                                            <div class="wrap-input100 validate-input" data-validate = "Enter Firstname">
                                                                                <input class="input100" type="text" name="firstname" placeholder="Enter Firstname">
                                                                                <span class="focus-input100" data-placeholder="&#xf1f3;"></span>
                                                                            </div>

                                                                            <div class="wrap-input100 validate-input" data-validate = "Enter Lastname">
                                                                                <input class="input100" type="text" name="lastname" placeholder="Enter Lastname">
                                                                                <span class="focus-input100" data-placeholder="&#xf1f3;"></span>
                                                                            </div>
                                                                            <?php 

                                                                            if (isset($_SESSION['professor_admin_login'])) {

                                                                                $professor_admin_id = $_SESSION['professor_admin_login'];

                                                                                $stmt = $conn->query("SELECT * FROM users WHERE id = $professor_admin_id");

                                                                                $stmt->execute();

                                                                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                            }

                                                                            ?>
                                                                            <div class="wrap-input100 validate-input" data-validate = "Enter branch">
                                                                                <input class="input100" type="text" name="branch" readonly value="<?php echo $row['branch'] ?>" placeholder="Enter branch">
                                                                                <span class="focus-input100" data-placeholder="&#xf1f3;"></span>
                                                                            </div>

                                                                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                                                                <input class="input100" type="text" name="studentid" placeholder="Enter username">
                                                                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                                            </div>

                                                                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                                                                <input class="input100" type="password" name="password" placeholder="Enter password">
                                                                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                                                            </div>
                                                                            <div class="wrap-input100 validate-input" data-validate="Enter Comfirm password">
                                                                                <input class="input100" type="password" name="c_password" placeholder="Enter Comfirm password">
                                                                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                                                            </div>

                                                                            

                                                                            <div class="container-login100-form-btn">
                                                                                <button class="login100-form-btn" type="submit" name="signup">
                                                                                Register
                                                                                </button>
                                                                            </div>

                                                                            
                                                                        </form>
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
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a></p>
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
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>

    <!--===============================================================================================-->
	<script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/bootstrap/js/popper.js"></script>
	<script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login/js/main.js"></script>

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
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});
		
	</script>

</body>
</html>