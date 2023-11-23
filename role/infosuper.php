<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 



    session_start();

    require_once '../config/config.php';

    if (!isset($_SESSION['super_admin_login'])) {

      $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';

      header('location: index.php');

  }

  if (isset($_GET['delete'])) {

	$delete_id = $_GET['delete'];

	$deletestmt = $conn->query("DELETE FROM users WHERE id = $delete_id");

	$deletestmt->execute();

	if ($deletestmt) {

		echo "<script>alert('Data has been deleted successfully');</script>";

		$_SESSION['success'] = "Data has been deleted succesfully";

		header("refresh:1; url=infosuper.php");

	}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Super Admin info</title>
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
		<?php include '../alert.php';?>
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
					<h2 class="font-w600 title mb-2 mr-auto ">Super Admin info</h2>
				</div>
				
				<div class="row">
					<div class="col-xl col-xxl">
						<div class="card">
							<div class="table-data">
								<div class="order">
									<div class="head">
										<h3> </h3>
						
									</div>
									<table class="table">
										<thead>
											<tr>
											<th scope="col" style="display: none;"><h2>ID</h2></th>
											<th scope="col"><h2>Firstname</h2></th>
											<th scope="col"><h2>lastname</h2></th>
											<th scope="col"><h2>Student ID</h2></th>
											<th scope="col"><h2>urole</h2></th>
											<th scope="col" style="display: none;" ><h2>id</h2></th>
											<th scope="col" class="text-center"><h2>Action</h2></th>
											</tr>
										</thead>
										<tbody>
										<?php 

											$stmt = $conn->query("SELECT * FROM users where urole = 'super_admin'");

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
                                            
											<td class="text-center">
                                                

												<a data-id="<?= $user['id']; ?>" href="?delete=<?= $user['id']; ?>" class="btn btn-danger delete-btn">Delete</a>
											</td>
                                         
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

						url: 'infosuper.php',

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

							document.location.href = 'infosuper.php';

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