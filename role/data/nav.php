<link href="../css/style.css" rel="stylesheet">
       <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="../admin.php" class="brand-logo">
                <img class="logo-abbr" src="../../img/logov.png" width="50" height="50" >
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
                        <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="#">
									<i id="icon-light"><i class='bx bxs-sun' style='color:#ffffff' ></i></i>
                                    <i id="icon-dark"><i class='bx bxs-moon'></i></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <i id="icon-full"><i class='bx bx-fullscreen' style='color:#ffffff' ></i></i>
                                    <i id="icon-minimize"><i class='bx bx-exit-fullscreen' style='color:#ffffff' ></i></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<div id="link_wrapper"></div>
                                </a>
								<div class="dropdown-menu dropdown-menu-right">
                                    <div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
										<a href="../rp.php">
											<div id="link_wrapper_text"></div>
										</a>
										</ul>
									</div>
                                    <a class="all-notification" href="../rp.php">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="../../img/logo.gif" width="20" alt="">
									<div class="header-info">
										<span>CMRU.</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item ai-icon">
                                        <form class="form-detail" action="../logout.php" method="post">
                           
                                        <?php 

                                            if (isset($_SESSION['admin_login'])) {

                                                $admin_id = $_SESSION['admin_login'];

                                                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

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
						<img src="../../img/logo.gif" alt="">
						<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<?php 

						if (isset($_SESSION['admin_login'])) {

							$admin_id = $_SESSION['admin_login'];

							$stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");

							$stmt->execute();

							$row = $stmt->fetch(PDO::FETCH_ASSOC);

						}

						?>
					<h5 class="name"><span class="font-w400">Hello,</span> <?php echo $row['firstname'] ?></h5>
					<p class="email"><p class="__cf_email__"><?= $row['studentid']; ?></p><p id="countdown">Session Timeout in: 30:00</p></p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
                    
                        <li><a href="../admin.php" class="ai-icon" aria-expanded="false">
							<i class='bx bxs-dashboard'></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <li><a href="../edit.php" class="ai-icon" aria-expanded="false">
							<i class='bx bxs-pencil'></i>
							<span class="nav-text">Edit VOTE</span>
						</a>
                        <li><a href="../rp.php" class="ai-icon" aria-expanded="false">
                            <i class='bx bxs-info-circle'></i>
							<span class="nav-text">Report Problem</span>
						</a>
					</li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class='bx bxs-user'></i>
							<span class="nav-text">personal information</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="../sinfo/password.php"><i class='bx bxs-lock'></i>Admin</a></li>
                            <li><a href="../infostudent.php">Student</a></li>
                            <li><a href="../infoprofessor.php">Professor</a></li>
                            <li><a href="../infostudentc.php">complete_s</a></li>
                            <li><a href="../infoprofessorc.php">complete_p</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Vote results</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class='bx bx-line-chart'></i>
							<span class="nav-text">Vote</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="no1.php">No.1</a></li>
                            <li><a href="no2.php">No.2</a></li>
                            <li><a href="no3.php">No.3</a></li>
                            <li><a href="no4.php">No.4</a></li>
                            <li><a href="none.php">None</a></li>
                        </ul>
                    </li>

					<li class="nav-label">Register</li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class='bx bxs-user-plus' ></i>
							<span class="nav-text">Register</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="../sreg/password.php"><i class='bx bxs-lock'></i>Admin</a></li>
                            <li><a href="../reg_p.php">Professor</a></li>
                            <li><a href="../reg_s.php">Student</a></li>
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