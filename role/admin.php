<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

	if (!isset($_SESSION['admin_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../index.php");

    }

?>
                <?php if(isset($_SESSION['successa'])) { ?>
                    <?php 
                        echo "<script>
                        $(document).ready(function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Admin',
                                text: 'Chiang Mai Rajabhat University',
                                  timer: 3000,
                                  timerProgressBar: true,
                              });
                        });
                    </script>";
                        
                        unset($_SESSION['successa']);
                    ?>
                <?php } ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta http-equiv="refresh" content="5">-->
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" />
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>
    <!-- Boxicons -->
	  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
	  <link rel="stylesheet" href="css/stylet.css">
  </head>
  <body>

    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="admin.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">ADMIN</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="data/no1.php">
					<i class='bx ' ><i class="fa-solid fa-check-to-slot"></i></i>
					<span class="text">No.1</span>
				</a>
			</li>
			<li>
				<a href="data/no2.php">
					<i class='bx ' ><i class="fa-solid fa-check-to-slot"></i></i>
					<span class="text">No.2</span>
				</a>
			</li>
			<li>
				<a href="data/no3.php">
					<i class='bx ' ><i class="fa-solid fa-check-to-slot"></i></i>
					<span class="text">No.3</span>
				</a>
			</li>
			<li>
				<a href="data/no4.php">
					<i class='bx ' ><i class="fa-solid fa-check-to-slot"></i></i>
					<span class="text">No.4</span>
				</a>
			</li>
      <li>
				<a href="data/none.php">
					<i class='bx ' ><i class="fa-solid fa-check-to-slot"></i></i>
					<span class="text">None</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx ' ><i class="fa-solid fa-right-from-bracket"></i></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
      <i class="fa-solid fa-house"></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h2>Dashboard</h2>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3> </h3>
            <a href="../score.php">
              <h2><i class='bx ' ><i class="fa-solid fa-up-right-and-down-left-from-center"></i></i></h2>
            </a>
					</div>
					<table class="table">
              <thead>
                <tr>
                  <th scope="col"><h2>หมายเลขพรรค</h2></th>
                  <th scope="col"><h2>ชื่อพรรค</h2></th>
                  <th scope="col"><h2>รูปผู้สมัคร</h2></th>
                  <th scope="col"><h2>รวมคะแนน</h2></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><br><br><h3>No.1</h3></th>
                  <td><br><br><h3>พรรค...</h3></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1300px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:130px;">
                  </picture>
                  </td>
        
                  <td><br><br><h1><div id="link_wrapper01"></div></h1></td>

                </tr>
                <tr>
                  <th scope="row"><br><br><h3>No.3</h3></th>
                  <td><br><br><h3>พรรค...</h3></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:130px;">
                  </picture>
                  </td>
            
                  <td><br><br><h1><div id="link_wrapper02"></div></h1></td>
          
                </tr>
                <tr>
                  <th scope="row"><br><br><h3>No.3</h3></th>
                  <td><br><br><h3>พรรค...</h3></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:130px;">
                  </picture>
                  </td>
                  
                  <td><br><br><h1><div id="link_wrapper03"></div></h1></td>
      
                </tr>
                <tr>
                  <th scope="row"><br><br><h3>No.4</h3></th>
                  <td><br><br><h3>พรรค...</h3></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:130px;">
                  </picture>
                  </td>
                
                  <td><br><br><h1><div id="link_wrapper04"></div></h1></td>
      
                </tr>
                <tr>
                  <th colspan="3"><br><h1><center>ไม่ประสงค์ลงคะแนน</center></h1></th>
              
                  <td><br><h1><div id="link_wrappern"></div></h1></td>
      
                </tr>
              </tbody>
            </table>
				</div>
			</div>
      <footer class="bg-light text-center text-white mt-5">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright: VOTE 2023 by
          <a class="text-white" href="https://www.facebook.com/kritsanai.mex/"> Night Brain</a>
        </div>
        <!-- Copyright -->
      </footer>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	  <script src="script.js"></script>
    <script src="time.js"></script>
    <script src="sv01.js"></script>
    <script src="sv02.js"></script>
    <script src="sv03.js"></script>
    <script src="sv04.js"></script>
    <script src="svnone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>