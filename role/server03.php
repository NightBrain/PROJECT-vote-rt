<?php 
	include("../config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as vote03 FROM vote03";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['vote03'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
