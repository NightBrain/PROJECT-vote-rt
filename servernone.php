<?php 
	include("config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as nonee FROM nonee";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['nonee'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
