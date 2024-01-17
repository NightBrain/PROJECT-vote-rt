<link href="css/style.css" rel="stylesheet">
<?php 
	include("../config/config.php");
 
	
		$sql = "SELECT COUNT(*) as users FROM users where report = 'กำลังรอดำเนินการ...'";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

        $noti = $fetch['users'];
			
                    if ($noti > 0) {
                        echo "<i class='bx bxs-bell-ring bx-tada' style='color:#ffffff' ></i>";
                        echo "<div class='badge light text-white bg-danger rounded-circle'> {$noti} </div>";

                    } else {
                        echo "<i class='bx bxs-bell' style='color:#ffffff' ></i>";
                    }
 	} 
    
?>
