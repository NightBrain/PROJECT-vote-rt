              <?php if(isset($_SESSION['errorpc'])) { ?>
                <?php 
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                          title: 'รหัสผ่านต้องมีความยาวระหว่าง',
                          text: '  5 ถึง 20 ตัวอักษร',
                          icon:  'warning',
                        });
                    });
                    </script>";
                    
                    unset($_SESSION['errorpc']);
                ?>
              <?php } ?>


              
              <?php if(isset($_SESSION['errornm'])) { ?>
                <?php 
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            icon: 'warning',
                            title: 'password not match',
                            text:'',
                         
                          });
                    });
                    </script>";
                    
                    unset($_SESSION['errornm']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['warning'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                         Swal.fire({
                             icon: 'warning',
                             title: 'มี Username นี้อยู่ในระบบแล้ว',
                             text: ' ',
                        
                           });
                     });
                 </script>";
                    
                    unset($_SESSION['warning']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['success'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                         Swal.fire({
                             icon: 'success',
                             title: 'Successfully Registered',
                             text: '',
                          timer: 3000,
                          timerProgressBar: true,
                           });
                     });
                 </script>";
                    
                    unset($_SESSION['success']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['error'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                      Swal.fire({
                          icon: 'warning',
                          title: 'There's something wrong.',
                          text: '',
                         
                        });
                  });
                 </script>";
                    
                    unset($_SESSION['error']);
                ?>
              <?php } ?>

             