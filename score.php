<?php 



    session_start();

    require_once 'config/config.php';

?>




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
	<title>SCORE VOTE REALTIME</title>
	
	<!-- FAVICONS ICON -->
  <link rel="icon" type="image/png" href="img/logov.png">
	<link href="role/professor/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="role/professor/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="role/css/css.css">
    <link rel="stylesheet" href="role/css/time.css">
	
	<!-- Style css -->
    <link href="role/professor/css/style.css" rel="stylesheet">
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
                    background-image: url("img/bg.jpg");

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
							              <a href="index.php" class="dashboard_bar mx-5" style='color:#ffffff'>  
                            <i class='bx bxs-circle bx-flashing' style="color: red;"></i>&nbsp; VOTE-RT                 
                            </a>
                        </div>
                        <ul class="navbar-nav header-right ">
							
							
							<li class="nav-item dropdown  header-profile mt-1 mb-1" style='color:#ffffff'>
              <div class="display-time mt-2 mx-3" style="font-size: 2rem; font-weight: 600;"></div>  
              <div class="display-date mt-2">
                  <span id="day">day</span>,
                  <span id="daynum">00</span>
                  <span id="month">month</span>
                  <span id="year">0000</span>
              </div>
       
              

								<a class="nav-link" href="index.php" role="button" data-bs-toggle="dropdown">
									<img src="img/logo.gif" width="56" alt="">
								</a>
                
                    <h3 class="dashboard_bar mx-3 mt-2" style='color:#ffffff'>
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
			<div class="container-fiuid">
				<div class="row">
					<div class="col-xl" >
						<div class="row">
							<div class="col-xl">
								<div class="row">
									<div class="col-xl-12">
										<div class="container-fiuid">
											<div class="card-body" style="border-radius: 50px; background-color:rgba(255, 255, 255, 0.8);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                      
                      
                       <div class="container-fluid text-center">
                              <div class="row">
                                <div class="col justify-content-center">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col" class="fs-2"><b>หมายเลขพรรค</b></th>
                                        <th scope="col" class="fs-2"><b>ชื่อพรรค</b></th>
                                        <th scope="col" class="text-center fs-2"><b>รูปผู้สมัคร</b></th>
                                        <th scope="col" class="text-center fs-2"><b>คะแนนรวม</b></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <?php 

                                        $stmt = $conn->query("SELECT * FROM vnumber WHERE no = '01'");

                                        $stmt->execute();

                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);



                                        ?>
                                        <th scope="row" class="fs-3"><br><b>No.1</b></th>
                                        <th class="fs-3"><br><?= $row['name']; ?></th>
                                        <th class="text-center">
                                        <picture>
                                          <img src="role/uploads/<?= $row['img']; ?>" class="img-fluid img-thumbnail" style="width:85px;">
                                        </picture>
                                        </th>
                              
                                        <th class="text-center fs-3"><br><b><div id="link_wrapper01"></div></b></th>
                                    
                                      </tr>
                                      <tr>
                                      <tr>
                                      <?php 

                                        $stmt = $conn->query("SELECT * FROM vnumber WHERE no = '02'");

                                        $stmt->execute();

                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);



                                        ?>
                                        <th scope="row" class="fs-3"><br><b>No.3</b></th>
                                        <th class="fs-3"><br><?= $row['name']; ?></th>
                                        <th class="text-center">
                                        <picture>
                                          <img src="role/uploads/<?= $row['img']; ?>" class="img-fluid img-thumbnail" style="width:85px;">
                                        </picture>
                                        </th>
                                  
                                        <th class="text-center fs-3"><br><b><div id="link_wrapper02"></div></b></th>
                                
                                      </tr>
                                      <tr>
                                      <tr>
                                      <?php 

                                        $stmt = $conn->query("SELECT * FROM vnumber WHERE no = '03'");

                                        $stmt->execute();

                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);



                                        ?>
                                        <th scope="row" class="fs-3"><br><b>No.3</b></th>
                                        <th class="fs-3"><br><?= $row['name']; ?></th>
                                        <th class="text-center">
                                        <picture>
                                          <img src="role/uploads/<?= $row['img']; ?>" class="img-fluid img-thumbnail" style="width:85px;">
                                        </picture>
                                        </th>
                                        
                                        <th class="text-center fs-3"><br><b><div id="link_wrapper03"></div></b></th>
                            
                                      </tr>
                                      <tr>
                                      <tr>
                                      <?php 

                                        $stmt = $conn->query("SELECT * FROM vnumber WHERE no = '04'");

                                        $stmt->execute();

                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);



                                        ?>
                                        <th scope="row" class="fs-3"><br><b>No.4</b></th>
                                        <th class="fs-3"><br><?= $row['name']; ?></th>
                                        <th class="text-center">
                                        <picture>
                                          <img src="role/uploads/<?= $row['img']; ?>" class="img-fluid img-thumbnail" style="width:85px;">
                                        </picture>
                                        </th>
                                      
                                        <th class="text-center fs-3"><br><b><div id="link_wrapper04"></div></b></th>
                            
                                      </tr>
                                      <tr>
                                        <th colspan="3" class="text-center fs-3"><br>ไม่ประสงค์ลงคะแนน</th>
                                    
                                        <th class="text-center fs-3"><br><b><div id="link_wrappern"></div></b></th>
                            
                                      </tr>
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
        <div class="text-center">
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
    <script src="role/time.js"></script>
    <script src="sv01.js"></script>
    <script src="sv02.js"></script>
    <script src="sv03.js"></script>
    <script src="sv04.js"></script>
    <script src="svnone.js"></script>
    <!-- Required vendors -->
    <script src="role/professor/vendor/global/global.min.js"></script>
	<script src="role/professor/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="role/professor/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="role/professor/vendor/apexchart/apexchart.js"></script>
	
	<script src="role/professor/vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="role/professor/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="role/professor/js/dashboard/dashboard-1.js"></script>
	
	<script src="role/professor/vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="role/professor/js/custom.min.js"></script>
	<script src="role/professor/js/dlabnav-init.js"></script>
	<script src="role/professor/js/demo.js"></script>

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
