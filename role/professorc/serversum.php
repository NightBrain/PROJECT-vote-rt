<?php 
	include("../../config/config.php");
 
	
 ?>
<?php 

if (isset($_SESSION['professorc_login'])) {

	$professor_id = $_SESSION['professorc_login'];

	$stmt = $conn->query("SELECT * FROM users WHERE id = $professor_id");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

}

$b = $row['branch'];

		$sql = "SELECT COUNT(*) as users FROM users where branch = '$b' and urole = 'student' or branch = '$b' and urole = 'complete_s'";

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
