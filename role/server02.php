<?php 
	include("../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as users FROM users WHERE urole = 'professor' or urole = 'professor_c'" ;

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
