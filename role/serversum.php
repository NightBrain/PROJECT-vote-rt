<?php 
	include("../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as users FROM users where urole = 'professor_c' or urole = 'complete_s'";

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
