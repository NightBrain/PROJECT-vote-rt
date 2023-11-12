<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();

    require_once '../config/config.php';

	if (!isset($_SESSION['student_login'])) {

        $_SESSION['errora'] = 'กรุณาเข้าสู่ระบบ!';

        header("location: ../index.php");

    }

?>
                <?php if(isset($_SESSION['successstu'])) { ?>
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
                        
                        unset($_SESSION['successstu']);
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
    <div class="container text-center mt-5">
        <div class="row">
          <div class="col border rounded-5 m-3">
            <h3>No.1</h3>
            <p>พรรค...</p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No.1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    พรรค...
                    <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-25 p-3">
                    <form class="form-detail" action="vote/vote01.php" method="post">
                        <div class="form-group">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $student_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                        ?>
                           <input style="display: none;"  type="text" readonly value="หมายเลข 1" required class="form-control" name="number">
                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                          <label for="exampleInputEmail1">(กรอกรหัสนักศึกษาเพื่อลงคะแนน)</label>
                          <input type="text" readonly value="<?php echo $row['sid'] ?>" required class="form-control" name="ids">
                        </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnt" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-danger bttn">ลงคะแนน</button>
                    </div>
                    </form> 
                </div>
                </div>
            </div>
            <div class="text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail">
                <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal1"><h1><i class="bi bi-x-circle"></i></h1><h4>ลงคะแนน</h4></button>
            </div>
          </div>
          <div class="col border rounded-5 m-3">
            <h3>No.2</h3>
            <p>พรรค...</p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">No.2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        พรรค...
                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-25 p-3">
                        <form class="form-detail" action="vote/vote02.php" method="post">
                        <div class="form-group">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $student_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
                             <input style="display: none;"  type="text" readonly value="หมายเลข 2" required class="form-control" name="number">
                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                            <label for="exampleInputEmail1">(กรอกรหัสนักศึกษาเพื่อลงคะแนน)</label>
                            <input type="text" readonly value="<?php echo $row['sid'] ?>" required class="form-control" name="ids">
                        </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnt" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-danger bttn">ลงคะแนน</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail">
                <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><h1><i class="bi bi-x-circle"></i></h1><h4>ลงคะแนน</h4></button>
              </div>
          </div>
          <div class="col border rounded-5 m-3">
            <h3>No.3</h3>
            <p>พรรค...</p>
           <!-- Modal -->
           <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No.3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    พรรค...
                    <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-25 p-3">
                    <form class="form-detail" action="vote/vote03.php" method="post">
                        <div class="form-group">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $student_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
                             <input style="display: none;"  type="text" readonly value="หมายเลข 3" required class="form-control" name="number">
                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                            <label for="exampleInputEmail1">(กรอกรหัสนักศึกษาเพื่อลงคะแนน)</label>
                            <input type="text" readonly value="<?php echo $row['sid'] ?>" required class="form-control" name="ids">
                        </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnt" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-danger bttn">ลงคะแนน</button>
                    </div>
                    </form>
            </div>
            </div>
        </div>
        <div class="text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail">
            <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><h1><i class="bi bi-x-circle"></i></h1><h4>ลงคะแนน</h4></button>
          </div>
        </div>
          <div class="col border rounded-5 m-3">
            <h3>No.4</h3>
            <p>พรรค...</p>
           <!-- Modal -->
           <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No.4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    พรรค...
                    <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-25 p-3">
                    <form class="form-detail" action="vote/vote04.php" method="post">
                        <div class="form-group">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $student_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
                             <input style="display: none;"  type="text" readonly value="หมายเลข 4" required class="form-control" name="number">
                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                            <label for="exampleInputEmail1">(กรอกรหัสนักศึกษาเพื่อลงคะแนน)</label>
                            <input type="text" readonly value="<?php echo $row['sid'] ?>" required class="form-control" name="ids">
                        </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnt" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-danger bttn">ลงคะแนน</button>
                    </div>
                    </form>
            </div>
            </div>
        </div>
        <div class="text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="img-thumbnail">
            <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><h1><i class="bi bi-x-circle"></i></h1><h4>ลงคะแนน</h4></button>
          </div>
      </div>
      </div>
        <div class="container text-center mt-2 border rounded-5">
        <div class="row">
          <div class="col justify-content-center">
             <!-- Modal -->
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ไม่ประสงค์ลงคะแนน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        พรรค...
                        <br><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="..." class="w-25 p-3">
                        <form class="form-detail" action="vote/votenone.php" method="post">
                        <div class="form-group">
                        <?php 

                            if (isset($_SESSION['student_login'])) {

                                $student_id = $_SESSION['student_login'];

                                $stmt = $conn->query("SELECT * FROM users WHERE id = $student_id");

                                $stmt->execute();

                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                            }

                            ?>
                            <input style="display: none;"  type="text" readonly value="ไม่ประสงค์ลงคะแนน" required class="form-control" name="number">
                            <input style="display: none;"  type="text" readonly value="<?php echo $row['id'] ?>" required class="form-control" name="id">
                            <label for="exampleInputEmail1">(กรอกรหัสนักศึกษาเพื่อลงคะแนน)</label>
                            <input type="text" readonly value="<?php echo $row['sid'] ?>" required class="form-control" name="ids">
                        </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnt" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="submit" class="btn btn-danger bttn">ลงคะแนน</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
                <h1>ไม่ประสงค์ลงคะแนน</h1>
                <button type="button" class="btn btn-danger bttn m-3" data-bs-toggle="modal" data-bs-target="#exampleModal5"><h1><i class="bi bi-x-circle"></i></h1><h4>ลงคะแนน</h4></button>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
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