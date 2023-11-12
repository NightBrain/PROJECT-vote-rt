<?php 
	include("config/config.php");
 
	
 ?>
<?php 
		$sql = "SELECT COUNT(*) as vote02 FROM vote02";

		$query = $conn->prepare($sql);

		$query->execute();
	
		while($fetch = $query->fetch()){

 ?>

			<tbody>
				<tr>
					<td><?= $fetch['vote02'] ?> คะแนน</td>
				</tr>
			</tbody>
<?php 	} ?>
