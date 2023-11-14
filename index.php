<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

  session_start();

  require_once 'config/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMRU LOG IN</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="button.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body>

    <video playsinline autoplay muted loop poster="img/bg.jpg" id="bgvid">
      <source src="img/vdo/cmru.mp4" type="video/mp4">
    </video>

    <div class="inner-container bgvid inner">
      <form action="signin_db.php" method="post">
        <div class="box">
          <div class="text-center">
            <div class="row cen">
              <div class="col-md-2 cen">
                <img src="img/logo.gif" alt="" width="120px">
              </div>
            </div>
            <div class="row">
              <div style="font-size: 18px; font-weight: bold;">มหาวิทยาลัยราชภัฏเชียงใหม่</div>
              <div style="font-size: 14px;">Chiang Mai Rajabhat University</div>
            </div>
          <input class="bdrd" type="text" placeholder="Username" name="studentid">
          <input class="bdrd" type="password" placeholder="Password" name="password">
          <button class="button-63" type="submit" name="signin">LOG IN</button>
          <hr>
          
              <div class="row">
                <div class="col cen">
                  <p class="icon"><i class='bx bx-line-chart bx-flashing' style='color:#ffffff;  font-size: 20px;' ></i></p>
                <a href="score.php" class="buttonn">  &nbsp; &nbsp; &nbsp;ผลคะแนนแบบเรียลไทม์</a>
                <?php include 'alert.php';?>
                </div>
              </div>
    
        </div>
      </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

</body>

</html>

