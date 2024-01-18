<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 



    session_start();

    require_once '../config/config.php';

    if (!isset($_SESSION['admin_login'])) {

      $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';

      header('location: index.php');

  }

  // ตั้งเวลา timeout เป็น 1800 วินาที (30 นาที)
	$timeout = 1800;

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


  if (isset($_GET['delete'])) {

	$delete_id = $_GET['delete'];

	$deletestmt = $conn->query("DELETE FROM users WHERE id = $delete_id");

	$deletestmt->execute();

	if ($deletestmt) {

		echo "<script>alert('Data has been deleted successfully');</script>";

		$_SESSION['success'] = "Data has been deleted succesfully";

		header("refresh:1; url=rp.php");

	}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Report Problem</title>
    <!-- Favicon icon -->
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logov.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	

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

		<?php include 'nav1.php';?>
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
					<h2 class="font-w600 title mb-2 mr-auto ">Report Problem</h2>
				</div>
				
				<div class="row">
					<div class="col-xl col-xxl">
						<div class="">
							<div class="table-data" style="height: 800px">
								<div class="order">
									<div class="head">
										<h3> </h3>
						
									</div>
									<iframe src="table/drp.php" width="100%" height="100%" class="rounded-5" ></iframe>
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
	<script src="timeout.js"></script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="vendor/global/global.min.js"></script>
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



	$(".delete-btn").click(function(e) {

	var userId = $(this).data('id');

	e.preventDefault();

	deleteConfirm(userId);

	})



	function deleteConfirm(userId) {

	Swal.fire({

		title: 'Edited successfully',

		text: "yes or no?",

		showCancelButton: true,

		confirmButtonColor: '#02d602',

		cancelButtonColor: '#d33',

		confirmButtonText: 'Yes successfully',

		showLoaderOnConfirm: true,

		preConfirm: function() {

			return new Promise(function(resolve) {

				$.ajax({

						url: 'rp.php',

						type: 'GET',

						data: 'delete=' + userId,

					})

					.done(function() {

						Swal.fire({

							title: 'success',

							text: 'Edited successfully!',

							icon: 'success',

							timer: 2000,
                                 
							timerProgressBar: true,

						}).then(() => {

							document.location.href = 'rp.php';

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