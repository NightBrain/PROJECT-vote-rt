<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

	if (!isset($_SESSION['complete_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../index.php");

    }

?>
                <?php if(isset($_SESSION['successcom'])) { ?>
                    <?php 
                        echo "<script>
                        $(document).ready(function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Welcome Student',
                                text: 'Chiang Mai Rajabhat University',
                                  timer: 3000,
                                  timerProgressBar: true,
                              });
                        });
                    </script>";
                        
                        unset($_SESSION['successcom']);
                    ?>
                <?php } ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOTE 2023</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" />
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center">
          <a class="navbar-brand" href="#">
            <h1><marquee direction="left">VOTE 2023</marquee></h1>
          </a>
        </div>
      </nav>
      <?php 

        if (isset($_SESSION['complete_login'])) {

              $complete_id = $_SESSION['complete_login'];

              $stmt = $conn->query("SELECT * FROM users WHERE id = $complete_id");

              $stmt->execute();

              $row = $stmt->fetch(PDO::FETCH_ASSOC);

                }

          ?>
    <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
    <p>คุณเลือกโหวต <?php echo $row['number'] ?></p>
      <footer class="bg-light text-center text-white mt-5">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <center>
          <a type="button" href="logout.php" class="btn btn-danger">LOGOUT</a>
        </center><br>
          © 2023 Copyright: VOTE 2023 by
          <a class="text-white" href="https://www.facebook.com/kritsanai.mex/"> Night Brain</a>
        </div>
        <!-- Copyright -->
        
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>