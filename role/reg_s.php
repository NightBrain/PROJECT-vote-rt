<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

	if (!isset($_SESSION['super_admin_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../index.php");

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register Student</title>
    <!-- Favicon icon -->
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logov.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
	
</head>
<body>
    <?php include 'alertr.php';?>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
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
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="admin.php" class="brand-logo">
                <img class="logo-abbr" src="../img/logov.png" width="50" height="50" >
					<h3 class="brand-title" width="74" height="22">VOTE-RT</h3>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								
								
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="../img/logo.gif" width="20" alt="">
									<div class="header-info">
										<span>CMRU.</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
				
			</div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<img src="../img/logo.gif" alt="">
						<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<?php 

						if (isset($_SESSION['super_admin_login'])) {

							$admin_id = $_SESSION['super_admin_login'];

							$stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

							$stmt->execute();

							$row = $stmt->fetch(PDO::FETCH_ASSOC);

						}

						?>
					<h5 class="name"><span class="font-w400">Hello,</span> <?php echo $row['firstname'] ?></h5>
					<p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89e4e8fbf8fcecf3f3f3f3c9e4e8e0e5a7eae6e4">[vote-rt@admin.com]</a></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
                    
                        <li><a href="admin.php" class="ai-icon" aria-expanded="false">
							<i class='bx bxs-dashboard'></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class='bx bxs-user'></i>
							<span class="nav-text">personal information</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="infosuper.php">Super_Admin</a></li>
                            <li><a href="infoadmin_pro.php">Professor_Admin</a></li>
                            <li><a href="infostudent.php">Student</a></li>
                            <li><a href="infoprofessor.php">Professor</a></li>
                            <li><a href="infostudentc.php">complete_s</a></li>
                            <li><a href="infoprofessorc.php">complete_p</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Vote results</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class='bx bx-line-chart'></i>
							<span class="nav-text">Vote</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="data/no1.php">No.1</a></li>
                            <li><a href="data/no2.php">No.2</a></li>
                            <li><a href="data/no3.php">No.3</a></li>
                            <li><a href="data/no4.php">No.4</a></li>
                            <li><a href="data/none.php">None</a></li>
                        </ul>
                    </li>

					<li class="nav-label">Register</li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class='bx bxs-user-plus' ></i>
							<span class="nav-text">Register</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="reg_p.php">Professor</a></li>
                            <li><a href="reg_s.php">Student</a></li>
                        </ul>
                    </li>
			
				<div class="copyright">
					<p><strong>Super Admin VoteRealTime</strong><br> © 2023 All Rights Reserved</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<!-- <div class="form-head" style="background-image:url('images/background/bg3.jpg');background-position: bottom; ">
				<div class="container max d-flex align-items-center mt-0">
					<h2 class="font-w600 title text-white mb-2 mr-auto ">Dashboard</h2>
					<div class="weather-btn mb-2">
						<span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
						<select class="form-control style-1 default-select  mr-3 ">
							<option>Medan, IDN</option>
							<option>Jakarta, IDN</option>
							<option>Surabaya, IDN</option>
						</select>
					</div>
					<a href="javascript:void(0);" class="btn white-transparent mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
				</div>
			</div> -->
			<div class="container-fluid">
				<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">Register Student</h2>
				</div>
				
				<div class="row">
					<div class="col-xl col-xxl">
						<div class="card">
                        <div class="limiter">
                                <div class="container mb-5">
                                    <div class="wrap">
                                        <form class="login100-form validate-form" action="sign/signup_db_s.php" method="post">
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

                                            <div class="wrap-input100 validate-input" data-validate = "Enter branch">
                                                <input class="input100" type="text" name="branch" placeholder="Enter branch">
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

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © VoteRealTime &amp; Developed by <a href="../index.htm" target="_blank">DexignZone</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
	


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>

    <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>



	<script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},1500)
		});



	$(".delete-btn").click(function(e) {

	var userId = $(this).data('id');

	e.preventDefault();

	deleteConfirm(userId);

	})



	function deleteConfirm(userId) {

	Swal.fire({

		title: 'Are you sure?',

		text: "It will be deleted permanently!",

		showCancelButton: true,

		confirmButtonColor: '#3085d6',

		cancelButtonColor: '#d33',

		confirmButtonText: 'Yes, delete it!',

		showLoaderOnConfirm: true,

		preConfirm: function() {

			return new Promise(function(resolve) {

				$.ajax({

						url: 'no1.php',

						type: 'GET',

						data: 'delete=' + userId,

					})

					.done(function() {

						Swal.fire({

							title: 'success',

							text: 'Data deleted successfully!',

							icon: 'success',

							timer: 2000,
                                 
							timerProgressBar: true,

						}).then(() => {

							document.location.href = 'no1.php';

						})

					})

					.fail(function() {

						Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')

						window.location.reload();

					});

			});

		},

	});

	}

	</script>

</body>
</html>