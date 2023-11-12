<?php 



    session_start();

    require_once 'config/config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta http-equiv="refresh" content="5">-->
    <title>VOTE 2023</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" />
    <link rel="stylesheet" href="role/css/css.css">
    <link rel="stylesheet" href="role/css/time.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center">
          <a class="navbar-brand" href="#">
            <h2>
            
              <div class="display-date">
                VOTE
                <span id="day">day</span>,
                <span id="daynum">00</span>
                <span id="month">month</span>
                <span id="year">0000</span>
              </div>
            
            </h2>
          </a>
        </div>
      </nav>
      <center>
      <div class="container">
      
      <div class="display-time"></div>
      </div>
      </center>
     
        <div class="container text-center mt-1 border rounded-5">
        <div class="row">
          <div class="col justify-content-center">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"><h1>หมายเลขพรรค</h1></th>
                  <th scope="col"><h1>ชื่อพรรค</h1></th>
                  <th scope="col"><h1>รูปผู้สมัคร</h1></th>
                  <th scope="col"><h1>รวมคะแนน</h1></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><br><br><h2>No.1</h2></th>
                  <td><br><br><h2>พรรค...</h2></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:120px;">
                  </picture>
                  </td>
        
                  <td><br><br><h2><div id="link_wrapper01"></div></h2></td>

                </tr>
                <tr>
                  <th scope="row"><br><br><h2>No.2</h2></th>
                  <td><br><br><h2>พรรค...</h2></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:120px;">
                  </picture>
                  </td>
            
                  <td><br><br><h2><div id="link_wrapper02"></div></h2></td>
          
                </tr>
                <tr>
                  <th scope="row"><br><br><h2>No.3</h2></th>
                  <td><br><br><h2>พรรค...</h2></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:120px;">
                  </picture>
                  </td>
                  
                  <td><br><br><h2><div id="link_wrapper03"></div></h2></td>
      
                </tr>
                <tr>
                  <th scope="row"><br><br><h2>No.4</h2></th>
                  <td><br><br><h2>พรรค...</h2></td>
                  <td>
                  <picture>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1150px-User_icon-cp.svg.png" class="img-fluid img-thumbnail" style="width:120px;">
                  </picture>
                  </td>
                
                  <td><br><br><h2><div id="link_wrapper04"></div></h2></td>
      
                </tr>
                <tr>
                  <th colspan="3"><br><h2>ไม่ประสงค์ลงคะแนน</h2></th>
              
                  <td><br><h2><div id="link_wrappern"></div></h2></td>
      
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        </div>
    <br><br><br>
      <footer class="bg-light text-center text-white mt-5">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright: VOTE 2023 by
          <a class="text-white" href="https://www.facebook.com/kritsanai.mex/"> Night Brain</a>
        </div>
        <!-- Copyright -->
      </footer>
    <script src="role/time.js"></script>
    <script src="sv01.js"></script>
    <script src="sv02.js"></script>
    <script src="sv03.js"></script>
    <script src="sv04.js"></script>
    <script src="svnone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>