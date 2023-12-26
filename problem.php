<?php

  session_start();

  require_once 'config/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Problem</title>
    <link rel="stylesheet" href="button.css">
    <link rel="icon" type="image/png" href="img/logov.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body, html {
                    height: 100%;
                    margin: 0;
                    }
                    .bg {
                    /* The image used */
                    background-image: url("img/bg.jpg");

                    /* Full height */
                    height: 100%; 

                    /* Center and scale the image nicely */
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    }

    </style>
</head>
<body>
    <div class="bg">
    <div class="container h-100 d-flex align-items-center justify-content-center">
    <form class="form-detail" action="prob.php" method="post">
        <div class="form-group my-3">
                <h2 class="text-center" style='color:#ff0000'><b>Report Problem</b></h2><br>
                <input style="display: none;"  type="text" readonly value="กำลังรอดำเนินการ..." required class="form-control" name="report">
                <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 25px;'>
                <textarea name="problem" style="border-radius: 30px; padding: 15px; opacity: 0.6; border: none;" rows="6" cols="100" required placeholder="กรุณากรอกรหัสนักศึกษาลงไปด้วย"></textarea>
                </div><br>
                <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 18px;'>
                <button type="submit"  name="submit" class="buttonn" ><h4 style='color:#ffffff'><b>Report</b></h4></button>
                </div>    
        </div>
        <div class="modal-footer">
        <div class="col mt-2" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 25px;'>     
        <p style='color:#ff0000;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาอย่ารายงานเล่น [ ถ้าจับได้จะโดนตัดสิทธิ์ถาวร ] <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
        </div> 
       
        </div>
    </form> 
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>