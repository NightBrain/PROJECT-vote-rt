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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h4 class="text-center mt-3">กรุณากรอกรหัสนักศึกษาลงด้วย</h4>
    <form class="form-detail" action="prob.php" method="post">
        <div class="form-group my-3">
            <input style="display: none;"  type="text" readonly value="กำลังรอดำเนินการ..." required class="form-control" name="report">
            <div class="row">
                <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 25px;'>
                <textarea name="problem" rows="10" cols="100" required placeholder="problem"></textarea>
               
                </div>    
            </div>
            <div class="row">
                <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 18px;'>
                <button type="submit"  name="submit" class="btn btn-danger bttn mt-3" ><h4 style='color:#ffffff'><b>Report</b></h4></button>
                </div>    
            </div>
        </div>
        <div class="modal-footer">
        <div class="col" style='display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 25px;'>     
        <p style='color:#ff0000;'>( <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> กรุณาอย่ารายงานเล่น [ ถ้าจับได้จะโดนตัดสิทธิ์ถาวร ] <i class='bx bxs-error bx-tada' style='color:#ff8300' ></i> )</p>
        </div> 
       
        </div>
    </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>