<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    error_reporting(0);

    session_start();

    require_once '../../config/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="../data/btn.css">
</head>
<body>
    <div class="container-fluid mt-5">
    <form action="del/coded1.php" method="POST">
    <table id="myTable" class="display">
    <thead>
        <tr class="text-center">
        <th scope="col" style="display: none;"><h2>ID</h2></th>
		<th scope="col"><h2>Firstname</h2></th>
		<th scope="col"><h2>lastname</h2></th>
		<th scope="col"><h2>Student ID</h2></th>
		<th scope="col"><h2>Role</h2></th>
		<th scope="col"><h2>branch</h2></th>
        </tr>
    </thead>
    <tbody>
	<?php 

	if (isset($_SESSION['professor_login'])) {

		$professor_id = $_SESSION['professor_login'];

		$stmt = $conn->query("SELECT * FROM users WHERE id = $professor_id");

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	?>
    <?php 
		$b = $row['branch'];

        $stmt = $conn->query("SELECT * FROM users where branch = '$b' and urole = 'student' or branch = '$b' and urole = 'complete_s'");

        $stmt->execute();

        $userss = $stmt->fetchAll();

        if (!$userss) {

        echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

        } else {

        foreach ($userss as $user) {

        ?>
        <tr>
		<td style="display: none;"><h4><?= $user['id']; ?></h4></td>
    	<td><h4><?= $user['firstname']; ?></h4></td>
    	<td><h4><?= $user['lastname']; ?></h4></td>
    	<td><h4><?= $user['studentid']; ?></h4></td>
    	<td><h4><?= $user['urole']; ?></h4></td>
    	<td><h4><?= $user['branch']; ?></h4></td>
        </tr>
        <?php } 
					} ?>
    </tbody>
</table>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

<script>

	$(".delete-btn").click(function(e) {

	var userId = $(this).data('id');

	e.preventDefault();

	deleteConfirm(userId);

	})


	</script>
</body>
</html>