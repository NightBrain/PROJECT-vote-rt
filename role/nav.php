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
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
								</div>
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
					<p class="email"><p class="__cf_email__"><?= $row['studentid']; ?></p></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
                    
                        <li><a href="admin.php" class="ai-icon" aria-expanded="false">
							<i class='bx bxs-dashboard'></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <li><a href="edit.php" class="ai-icon" aria-expanded="false">
							<i class='bx bxs-pencil'></i>
							<span class="nav-text">Edit VOTE</span>
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