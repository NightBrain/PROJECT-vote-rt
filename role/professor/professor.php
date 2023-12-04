<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../../config/config.php';

	if (!isset($_SESSION['professor_login'])) {

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
	<title>Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/png" href="../../img/logov.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	
</head>
<body>
<?php include '../../alert.php';?>
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
								<div class="row">
									<div class="col-xl-12">
										<div class="card tryal-gradient">
											<div class="card-body tryal row">
												<div class="col-xl-7 col-sm-6">
													<h2>ลงทะเบียนโหวตให้กับนักศึกษาของท่าน</h2>
													<span>(ถ้าท่านไม่ลงทะเบียนให้นักศึกษา นักศึกษาจะไม่สามารถเข้าระบบและโหวตได้)</span>
													<a href="reg_stu.php" class="btn btn-rounded  fs-18 font-w500">Register Now</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h2 class="fs-50 font-w700 mb-2">นักศึกษาที่ท่านลงทะเบียนให้เสร็จแล้ว</h2>
												<div class="d-flex align-items-center project-tab mb-2">	
													<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 "><?php include 'serversum.php';?></h4>
																<span class="fs-16 font-w400 d-block">People</span>
															</div>
														</div>
												</div>	
											</div>
											<div class="card-body">
												
											<table class="table">
										<thead>
											<tr>
											<th scope="col" style="display: none;"><h2>ID</h2></th>
											<th scope="col"><h2>Firstname</h2></th>
											<th scope="col"><h2>lastname</h2></th>
											<th scope="col"><h2>Student ID</h2></th>
											<th scope="col"><h2>Role</h2></th>
											<th scope="col"><h2>branch</h2></th>
											</tr>
										</thead>
										<tbody>
										<?php 

											if (isset($_SESSION['professor_login'])) {

												$professor_id = $_SESSION['professor_login'];

												$stmt = $conn->query("SELECT * FROM users WHERE id = $professor_id");

												$stmt->execute();

												$row = $stmt->fetch(PDO::FETCH_ASSOC);

											}

											?>
										<?php 
											$b = $row['branch'];

											$stmt = $conn->query("SELECT * FROM users where branch = '$b' and urole = 'student' or urole = 'complete_s'");

											$stmt->execute();

											$userss = $stmt->fetchAll();

											if (!$userss) {

											echo "<tr><td colspan='6' class='text-center'>None user</td></tr>";

											} else {

											foreach ($userss as $user) {

											?>
											<tr>
											<td style="display: none;"><h4><?= $user['id']; ?></h4></td>
											<td><h4><?= $user['firstname']; ?></h4></td>
											<td><h4><?= $user['lastname']; ?></h4></td>
											<td><h4><?= $user['studentid']; ?></h4></td>
											<td><h4><?= $user['urole']; ?></h4></td>
											<td><h4><?= $user['branch']; ?></h4></td>
                                            
											
                                            
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
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