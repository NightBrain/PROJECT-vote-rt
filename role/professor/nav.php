 <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="professor.php" class="brand-logo">
				<img class="logo-abbr" width="55" height="55" src="../../img/logov.png">
				<div class="brand-title">
					<h2 class="">CMRU.</h2>
					<span class="brand-sub-title">Admin Dashboard</span>
				</div>
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



<div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);">
								<i class='bx bxs-user'  width="28" height="28" ></i>
										<span class="badge light text-white bg-secondary rounded-circle"><?php include 'serversum.php';?></span>
                                </a>
							</li>	
							
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="../../img/logo.gif" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="dropdown-item ai-icon">
                                        <form class="form-detail" action="../logout.php" method="post">
                           
                                        <?php 

                                            if (isset($_SESSION['professor_login'])) {

                                                $professor_id = $_SESSION['professor_login'];

                                                $stmt = $conn->query("SELECT * FROM users WHERE id = $professor_id");

                                                $stmt->execute();

                                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                            }

                                        ?> 
                                        <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                                                                                 
                                        <span class="ml-2"><button type="submit"  name="submit" class="btn btn-danger bttn mt-3"><h4 style='color:#ffffff'><i class='bx bx-log-out'></i> Logout </h4></button></span>
                                        </form>
                                    </div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>


		



		<div class="dlabnav">
		<div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-3">
						<div class="side-bar-profile-img">
							<img src="../../img/logo.gif" alt="">
						</div>
						<?php 

						if (isset($_SESSION['professor_login'])) {

							$admin_id = $_SESSION['professor_login'];

							$stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

							$stmt->execute();

							$row = $stmt->fetch(PDO::FETCH_ASSOC);

						}

						?>
						<div class="profile-info1">
							<h4 class="fs-18 font-w500"><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></h4>
							<span><?php echo $row['studentid'] ?></span>
						</div>
						
					</div>	
					
				</div>
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                   
                  
                    <li><a href="professor.php" class="" aria-expanded="false">
						<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                  
                    <li><a href="reg_stu.php" class="" aria-expanded="false">
							<i class="fas fa-user-plus"></i>
							<span class="nav-text">Register Student</span>
						</a>
					</li>

                    <li><a href="professor_vote.php" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Vote</span>
						</a>
					</li>

                </ul>
				
				
				<div class="copyright">
					<p><strong>Professor Admin</strong> © 2023 All Rights Reserved</p><br><p id="countdown">Session Timeout in: 30:00</p>
					
				</div>
			</div>
        </div>