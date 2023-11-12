<?php 
	include("../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as vote01 FROM vote01";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['vote01'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
