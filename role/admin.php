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
					<h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
                                <img class="mb-3 currency-icon" src="../img/01.png" width="80" height="80">

								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper01"></h2>
						
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<img class="mb-3 currency-icon" src="../img/02.png" width="80" height="80">
									
								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper02"></h2>
								
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
                                <img class="mb-3 currency-icon" src="../img/03.png" width="80" height="80">

								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper03"></h2>
								
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<img class="mb-3 currency-icon" src="../img/04.png" width="80" height="80">

								<h2 class="text-black mb-2 font-w600"><div id="link_wrapper04"></h2>
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-9 col-xxl-8">
						<div class="card">
							<div class="card-header border-0 flex-wrap pb-0">
								<div class="mb-3">
									<h4 class="fs-20 text-black">Vote Chart</h4>
									<p class="mb-0 fs-12 text-black">The display is not real time.</p>
								</div>
								<div class="d-flex flex-wrap mb-2">
									<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
										<input type="checkbox" class="custom-control-input" id="customCheck9">
										<label class="custom-control-label" for="customCheck9">
											<span class="d-block  font-w500 mt-2">No.1</span>
										</label>
									</div>
									<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
										<input type="checkbox" class="custom-control-input" id="customCheck91">
										<label class="custom-control-label" for="customCheck91">
											<span class="d-block  font-w500 mt-2">No.2</span>
										</label>
									</div>
									<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
										<input type="checkbox" class="custom-control-input" id="customCheck92">
										<label class="custom-control-label" for="customCheck92">
											<span class="d-block font-w500 mt-2">No.3</span>
										</label>
									</div>
									<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
										<input type="checkbox" class="custom-control-input" id="customCheck93">
										<label class="custom-control-label" for="customCheck93">
											<span class="d-block font-w500 mt-2">No.4</span>
										</label>
									</div>
									<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
										<input type="checkbox" class="custom-control-input" id="customCheck93">
										<label class="custom-control-label" for="customCheck93">
											<span class="d-block font-w500 mt-2">None</span>
										</label>
									</div>
								</div>
								
							</div>
							<div class="card-body pb-2 px-3">
								<div id="marketChart" class="market-line"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="fs-20 text-black">Total <?php include 'serversum.php';?> people</h4>
							</div>
							<div class="card-body pb-0">
								<div id="currentChart" class="current-chart"></div>
								<div class="chart-content">	
									<div class="d-flex justify-content-between mb-2 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#EB8153"></rect>
											</svg>
											<span class="fs-14">No.1</span>
										</div>
										<div>
											<h5 class="mb-0"><?php include 'server01.php';?></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#71B945"></rect>
											</svg>

											<span class="fs-14">No.2</span>
										</div>
										<div>
											<h5 class="mb-0"><?php include 'server02.php';?></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#4A8CDA"></rect>
											</svg>
											<span class="fs-14">No.3</span>
										</div>
										<div>
											<h5 class="mb-0"><?php include 'server03.php';?></h5>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2 align-items-center">
										<div>
											<svg class="mr-2" width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="15" height="15" rx="7.5" fill="#6647BF"></rect>
											</svg>
											<span class="fs-14">No.4</span>
										</div>
										<div>
											<h5 class="mb-0"><?php include 'server04.php';?></h5>
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
													
												<div class="text-left ml-3">
													<span class="d-block fs-16 text-black"><?php include 'server01.php';?></span>
												</div>
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

											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?= $user['ids']; ?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
										</div>
									</div>
									<div class="card-footer border-0 p-0 caret">
										<a href="coin-details.html" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
									</div>
								</div>	
							</div>
							<div class="col-sm-6">
								<div class="card">
									
									<div class="card-body p-3 pb-0">
										<div class="dropdown custom-dropdown d-block tbl-orders">
											<div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                            <img src="../img/02.png" width="46" height="46">
												<div class="text-left ml-3">
													<span class="d-block fs-16 text-black"><?php include 'server02.php';?></span>
												</div>
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

											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?= $user['ids']; ?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
										</div>
									</div>
									<div class="card-footer border-0 p-0 caret">
										<a href="coin-details.html" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
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
                                                    <div class="text-left ml-3">
                                                        <span class="d-block fs-16 text-black"><?php include 'server03.php';?></span>
                                                    </div>
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

											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?= $user['ids']; ?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0 p-0 caret">
                                            <a href="coin-details.html" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        
                                        <div class="card-body p-3 pb-0">
                                            <div class="dropdown custom-dropdown d-block tbl-orders">
                                                <div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                                <img src="../img/04.png" width="46" height="46">
                                                    <div class="text-left ml-3">
                                                        <span class="d-block fs-16 text-black"><?php include 'server04.php';?></span>
                                                    </div>
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

											?>
											<tr>
											<td class="text-center"><?= $user['id']; ?></td>
											<td class="text-centert"><?= $user['ids']; ?></td>
											<td class="text-centert"><?= $user['time']; ?></td>
											</tr>
											<?php } 
														} ?>
										</tbody>
										</table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0 p-0 caret">
                                            <a href="coin-details.html" class="btn-link"><i class='bx bxs-chevron-down' aria-hidden="true"></i></a>
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
    <script src="sv01.js"></script>
    <script src="sv02.js"></script>
    <script src="sv03.js"></script>
    <script src="sv04.js"></script>
    <script src="svnone.js"></script>

    <script src="sv/sv011.js"></script>
    <script src="sv/sv022.js"></script>
    <script src="sv/sv033.js"></script>
    <script src="sv/sv044.js"></script>
    <script src="sv/svnone1.js"></script>
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