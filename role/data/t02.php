<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    error_reporting(0);

    session_start();

    require_once '../../config/config.php';

    if (isset($_GET['delete'])) {

        $delete_id = $_GET['delete'];
    
        $deletestmt = $conn->query("DELETE FROM vote02 WHERE id = $delete_id");
    
        $deletestmt->execute();
    
        if ($deletestmt) {
    
            echo "<script>alert('Data has been deleted successfully');</script>";
    
            $_SESSION['success'] = "Data has been deleted succesfully";
    
            header("refresh:1; url=t01.php");
    
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
    <link rel="stylesheet" href="btn.css">
</head>
<body>
    <div class="container mt-5">
    <form action="del/coded2.php" method="POST">
    <table id="myTable" class="display">
    <thead>
        <tr class="text-center">
            <th><h2>Student ID</h2></th>
            <th><h2>Time</h2></th>
            <th class="text-center"><button type="submit" name="stud_delete_multiple_btn" class="button-71" onClick="return confirm('Are you sure you want to delete?');">Delete Data All</button></th>
            <th style="display: none;"><h2>ID</h2></th>
            <th style="display: none;"><h2>IDD</h2></th>
        </tr>
    </thead>
    <tbody>
    <?php 

        $stmt = $conn->query("SELECT * FROM vote02 Order By id DESC");

        $stmt->execute();

        $userss = $stmt->fetchAll();

        if (!$userss) {

        echo "<tr><td colspan='6' class='text-center'>None vote</td></tr>";

        } else {

        foreach ($userss as $user) {

        ?>
        <tr>
            <td><h4><?= $user['ids']; ?></h4></td>
            <td><h4><?= $user['time']; ?></h4></td>
            <td class="text-center">
				<a data-id="<?= $user['id']; ?>" href="?delete=<?= $user['id']; ?>" class="button-62 delete-btn">Delete</a>
			</td>
            <td style="display: none;"><?= $user['id']; ?></td>
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

						url: 't02.php',

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

							document.location.href = 't02.php';

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