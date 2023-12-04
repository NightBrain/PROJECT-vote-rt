<?php 
	include("../../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as users FROM users where branch = 'techweb' and urole = 'student'";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['users'] ?></td>
				</tr>
			</tbody>
<?php 	} ?>
