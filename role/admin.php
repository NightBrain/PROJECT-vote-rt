<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();
	
	require_once '../config/config.php';

	if (!isset($_SESSION['admin_login'])) {

		$_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

		header("location: ../index.php");

	}

	// ตั้งเวลา timeout เป็น 1800 วินาที (30 นาที)
	$timeout = 60;

	if (isset($_SESSION['admin_login'])) {

		$admin_id = $_SESSION['admin_login'];

		$stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	// เช็คว่า session เป็นครั้งแรกหรือไม่
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
		// ถ้าเวลาที่ผ่านมามากกว่า timeout ให้ทำการ logout
		$id = $row['id'];
        $statuss = 'offline';



        $sql = $conn->prepare("UPDATE users SET statuss = :statuss WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":statuss", $statuss);
        $sql->execute();

		session_unset();     // ลบทุกตัวแปรใน session
		session_destroy();   // ทำลาย session

		header("Location: ../index.php"); // ส่งกลับไปที่หน้า login หรือหน้าที่คุณต้องการ
		exit();
	}

	// รีเซ็ตเวลาใน session เมื่อมีกิจกรรมใดๆ
	$_SESSION['LAST_ACTIVITY'] = time();


?>
<?php if(isset($_SESSION['successsa'])) { ?>
	<?php 
		echo "<script>
		$(document).ready(function() {
			Swal.fire({
				icon: 'success',
				title: 'Welcome Student',
				text: 'Chiang Mai Rajabhat University',
				  timer: 1000,
				  timerProgressBar: true,
			  });
		});
	</script>";
		
		unset($_SESSION['successsa']);
	?>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ADMIN VOTE-RT</title>
    <!-- Favicon icon -->
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logov.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

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


		
	<?php include 'nav.php';?>

      
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>
				</div>
				<div class="row">
				<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<img class="mb-3 currency-icon" src="../img/004.png" width="80" height="80">
								<h4 class="mt-1">Online Now</h4>
								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper04"></h2>
								
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
                                <img class="mb-3 currency-icon" src="../img/001.png" width="80" height="80">
								<h4 class="mt-1">Student</h4>
								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper01"></h2>
						
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<img class="mb-3 currency-icon" src="../img/002.png" width="80" height="80">
								<h4 class="mt-1">Professor</h4>
								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper02"></h2>
								
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
                                <img class="mb-3 currency-icon" src="../img/003.png" width="80" height="80">
								<h4 class="mt-1">Report problem</h4>
								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper03"></h2>
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-8 col-xxl-8">
						<div class="card">
							<div class="p-3">
								<div class="p-2 px-2 d-flex justify-content-center" style="background-color: #FFF; border-radius: 50px">
									<iframe src="chart/index.php" width="900px" height="450px"></iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-xxl-4">
						<div class="card">
							<div class="card pb-0 mt-2 px-5">
								<div class="chart-content">	
									<div class="text-center p-1">
										<h4 class="fs-20 text-black"> <div id="link_wrapper05"> </h4>
									</div>
									<hr>
									<div class="d-flex justify-content-between mb-4 align-items-center mt-4">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#FF6384"></rect>
											</svg>
											<span class="fs-14 text-black">No.1</span>
										</div>
										<div>
											<h5 class="mb-0"><div id="link_wrapper_11"></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-4 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#36A2EB"></rect>
											</svg>

											<span class="fs-14 text-black">No.2</span>
										</div>
										<div>
											<h5 class="mb-0"><div id="link_wrapper_22"></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-4 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#FFCE56"></rect>
											</svg>
											<span class="fs-14 text-black">No.3</span>
										</div>
										<div>
											<h5 class="mb-0"><div id="link_wrapper_33"></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-4 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#4BC0C0"></rect>
											</svg>
											<span class="fs-14 text-black">No.4</span>
										</div>
										<div>
											<h5 class="mb-0"><div id="link_wrapper_44"></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-4 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#9966FF"></rect>
											</svg>
											<span class="fs-14 text-black">None</span>
										</div>
										<div>
											<h5 class="mb-0"><div id="link_wrapper_nn"></h5>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="card">
				
									<div class="card-body p-3 pb-0">
										<div class="dropdown custom-dropdown d-block tbl-orders">
											<div class="btn  d-flex align-items-center border-0 order-bg rounded " data-toggle="dropdown">
												<img src="../img/01.png" width="46" height="46">
													
												<h5 class="ml-2 mb-0"><div id="link_wrapper_t1"></h5>
												<i class="fa fa-angle-down scale5 ml-auto"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">details</a>
												<a class="dropdown-item" href="javascript:void(0);">cancel</a>
											</div>
										</div>
										<div class="table-responsive">

										<table class="table">
										<thead>
											<tr>
											<th  class="text-left">ID</th>
											<th  class="text-left">Student ID</th>
											<th  class="text-left">Time</th>
											</tr>
										</thead>
										<tbody>
										<?php 

											$stmt = $conn->query("SELECT * FROM vote01 LIMIT 5");

											$stmt->execute();

											$userss = $stmt->fetchAll();

											if (!$userss) {

											echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

											} else {

											foreach ($userss as $user) {
											$text = $user['ids']; 
											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?php echo mb_strimwidth($text, 0, 10, '...');?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
										</div>
									</div>
									<div class="card-footer border-0 p-0 caret">
										<a href="data/no1.php" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
									</div>
								</div>	
							</div>
							<div class="col-sm-6">
								<div class="card">
									
									<div class="card-body p-3 pb-0">
										<div class="dropdown custom-dropdown d-block tbl-orders">
											<div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                            <img src="../img/02.png" width="46" height="46">
											<h5 class="ml-2 mb-0"><div id="link_wrapper_t2"></h5>
												<i class="fa fa-angle-down scale5 ml-auto"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">details</a>
												<a class="dropdown-item" href="javascript:void(0);">cancel</a>
											</div>
										</div>
										<div class="table-responsive">
										<table class="table">
										<thead>
											<tr>
											<th  class="text-left">ID</th>
											<th  class="text-left">Student ID</th>
											<th  class="text-left">Time</th>
											</tr>
										</thead>
										<tbody>
										<?php 

											$stmt = $conn->query("SELECT * FROM vote02 LIMIT 5");

											$stmt->execute();

											$userss = $stmt->fetchAll();

											if (!$userss) {

											echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

											} else {

											foreach ($userss as $user) {
											$text = $user['ids']; 
											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?php echo mb_strimwidth($text, 0, 10, '...');?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
										</div>
									</div>
									<div class="card-footer border-0 p-0 caret">
										<a href="data/no2.php" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
                            <div class="col-sm-6">
                                    <div class="card">
                                        
                                        <div class="card-body p-3 pb-0">
                                            <div class="dropdown custom-dropdown d-block tbl-orders">
                                                <div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                                <img src="../img/03.png" width="46" height="46">
												<h5 class="ml-2 mb-0"><div id="link_wrapper_t3"></h5>
                                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">cancel</a>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
											<table class="table">
										<thead>
											<tr>
											<th  class="text-left">ID</th>
											<th  class="text-left">Student ID</th>
											<th  class="text-left">Time</th>
											</tr>
										</thead>
										<tbody>
										<?php 

											$stmt = $conn->query("SELECT * FROM vote03 LIMIT 5");

											$stmt->execute();

											$userss = $stmt->fetchAll();

											if (!$userss) {

											echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

											} else {

											foreach ($userss as $user) {
											$text = $user['ids']; 
											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?php echo mb_strimwidth($text, 0, 10, '...');?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0 p-0 caret">
                                            <a href="data/no3.php" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        
                                        <div class="card-body p-3 pb-0">
                                            <div class="dropdown custom-dropdown d-block tbl-orders">
                                                <div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                                <img src="../img/04.png" width="46" height="46">
												<h5 class="ml-2 mb-0"><div id="link_wrapper_t4"></h5>
                                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">cancel</a>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
											<table class="table">
										<thead>
											<tr>
											<th  class="text-left">ID</th>
											<th  class="text-left">Student ID</th>
											<th  class="text-left">Time</th>
											</tr>
										</thead>
										<tbody>
										<?php 

											$stmt = $conn->query("SELECT * FROM vote04 LIMIT 5");

											$stmt->execute();

											$userss = $stmt->fetchAll();

											if (!$userss) {

											echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

											} else {

											foreach ($userss as $user) {
											$text = $user['ids']; 
											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?php echo mb_strimwidth($text, 0, 10, '...');?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0 p-0 caret">
                                            <a href="data/no4.php" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
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
    <script src="server.js"></script>
    <script src="timeout.js"></script>

    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
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

	<script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},1500)
		});
	</script>

</body>
</html>