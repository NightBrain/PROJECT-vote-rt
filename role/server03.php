<?php 
	include("../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as users FROM users WHERE report = 'กำลังรอดำเนินการ...'";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['users'] ?> คน</td>
				</tr>
			</tbody>
<?php 	} ?>
