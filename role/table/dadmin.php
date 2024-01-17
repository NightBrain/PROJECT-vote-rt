<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    error_reporting(0);

    session_start();

    require_once '../../config/config.php';

    if (isset($_GET['delete'])) {

        $delete_id = $_GET['delete'];
    
        $deletestmt = $conn->query("DELETE FROM users WHERE id = $delete_id");
    
        $deletestmt->execute();
    
        if ($deletestmt) {
    
            echo "<script>alert('Data has been deleted successfully');</script>";
    
            $_SESSION['success'] = "Data has been deleted succesfully";
    
            header("refresh:1; url=dadmin.php");
    
        }
    
    }

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
		<th scope="col"><h2>Lastname</h2></th>
		<th scope="col"><h2>Student ID</h2></th>
		<th scope="col"><h2>Role</h2></th>
		<th scope="col"><h2>Register By</h2></th>
		<th scope="col" style="display: none;" ><h2>id</h2></th>
		<th scope="col" class="text-center"><h2>Action</h2></th>
        </tr>
    </thead>
    <tbody>
    <?php 

        $stmt = $conn->query("SELECT * FROM users where urole = 'admin' Order By id DESC");

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
	    	<td><h4><?= $user['regby']; ?></h4></td>
            <td class="text-center">
				<a data-id="<?= $user['id']; ?>" href="?delete=<?= $user['id']; ?>" class="button-62 delete-btn">Delete</a>
			</td>
            <td style="display: none;"><input type="checkbox" name="stud_delete_id[]" checked value="<?= $user['id']; ?>"></td>
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



	function deleteConfirm(userId) {

	Swal.fire({

		title: 'Are you sure?',

		text: "It will be deleted permanently!",

		showCancelButton: true,

		confirmButtonColor: '#3085d6',

		cancelButtonColor: '#d33',

		confirmButtonText: 'Yes, delete it!',

		showLoaderOnConfirm: true,

		preConfirm: function() {

			return new Promise(function(resolve) {

				$.ajax({

						url: 'dadmin.php',

						type: 'GET',

						data: 'delete=' + userId,

					})

					.done(function() {

						Swal.fire({

							title: 'success',

							text: 'Data deleted successfully!',

							icon: 'success',

							timer: 2000,
                                 
							timerProgressBar: true,

						}).then(() => {

							document.location.href = 'dadmin.php';

						})

					})

					.fail(function() {

						Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')

						window.location.reload();

					});

			});

		},

	});

	}

	</script>
</body>
</html>